<?php
namespace Moto\System\Backup; use Moto; use Illuminate; use Closure; class BackupManager { const TYPE__FULL = 'full'; protected static $_instance; protected $_config = [ 'enabled' => false, 'storagePath' => '@websiteBackupDir', 'tempPath' => '@websiteBackupTempDir', ]; protected static $_registeredTypes = [ 'full' => [ 'steps' => [ 'init', 'maintenance:enable', 'file:scanning', 'file:copying', 'database:dumping:sql', 'database:dumping:json', 'maintenance:disable', 'settings:create', 'archiving', 'DONE', ], ], ]; protected static $_registeredSteps = [ 'init' => [ 'name' => 'init', 'class' => Moto\System\Backup\Step\InitStep::class, ], 'maintenance:enable' => [ 'name' => 'maintenance:enable', 'class' => Moto\System\Backup\Step\MaintenanceStep::class, ], 'file:scanning' => [ 'name' => 'file:scanning', 'class' => Moto\System\Backup\Step\FileScanningStep::class, ], 'file:copying' => [ 'name' => 'file:copying', 'class' => Moto\System\Backup\Step\FileCopyingStep::class, ], 'database:dumping:sql' => [ 'name' => 'database:dumping:sql', 'class' => Moto\System\Backup\Step\DatabaseDumpingSqlStep::class, ], 'database:dumping:json' => [ 'name' => 'database:dumping:json', 'class' => Moto\System\Backup\Step\DummyStep::class, ], 'licensing' => [ 'name' => 'licensing', 'class' => Moto\System\Backup\Step\DummyStep::class, ], 'settings:create' => [ 'name' => 'settings:create', 'class' => Moto\System\Backup\Step\SettingsCreateStep::class, ], 'archiving' => [ 'name' => 'archiving', 'class' => Moto\System\Backup\Step\CreateArchiveStep::class, ], 'maintenance:disable' => [ 'name' => 'maintenance:disable', 'class' => Moto\System\Backup\Step\MaintenanceStep::class, ], 'moving' => [ 'name' => 'moving', 'class' => Moto\System\Backup\Step\DummyStep::class, ], 'cleaning' => [ 'name' => 'cleaning', 'class' => Moto\System\Backup\Step\DummyStep::class, ], 'DONE' => [ 'name' => 'DONE', 'class' => Moto\System\Backup\Step\DoneStep::class, ], ]; public static function getInstance() { if (!static::$_instance) { static::$_instance = new static(); } return static::$_instance; } protected function __construct() { $this->_setConfig(Moto\Config::get('provider.backup')); } protected function _setConfig($config) { if (!is_array($config)) { return false; } $this->_config = array_merge($this->_config, $config); return true; } public function getConfig($name = null, $default = null) { if ($name === null) { return $this->_config; } return Moto\Util::getValue($this->_config, $name, $default); } public function isEnabled() { $enabled = (boolean) $this->getConfig('enabled'); $enabled &= (boolean) Moto\Features::isEnabled('engine_backups', true); return $enabled; } public function findLocalBackups() { $collection = new Moto\System\BaseCollection(); $storagePath = $this->getConfig('storagePath'); $absoluteStoragePath = Moto\System::getAbsolutePath($storagePath); $options = array( 'maxLevel' => 2, ); $list = Moto\Util::scanDir($absoluteStoragePath, '', $options); foreach ($list as $file) { $item = Moto\System\Backup\BackupFile::createFromPath($storagePath . '/' . $file); if (!$item) { continue; } $collection->push($item); } return $collection; } public function createNewTask($type = null) { if ($type === null) { $type = static::TYPE__FULL; } if (!$this->isExistsType($type)) { throw new Moto\Exception('Unknown backup type'); } $task = Moto\System\Backup\BackupTask::createNew($type); $task->save(); return $task; } public function isExistsType($type) { return array_key_exists($type, static::$_registeredTypes); } public function getTaskStepInformation($name) { if (!array_key_exists($name, static::$_registeredSteps)) { return null; } $step = static::$_registeredSteps[$name]; if (empty($step['label'])) { $step['label'] = strtoupper($step['name']); } return $step; } public function generateStepList($type) { if (!$this->isExistsType($type)) { return null; } $info = static::$_registeredTypes[$type]; $steps = $info['steps']; $collection = []; $plugins = Moto\System\PluginManager::findLocalPlugins()->getInstalled(); $previousStep = null; foreach ($steps as $index => $stepName) { $step = $this->getTaskStepInformation($stepName); if (!$step) { throw new Moto\Exception('Unknown step "' . $stepName . '"'); } $step = forward_static_call([$step['class'], 'prepareStepAttributes'], $step, $plugins); $step['index'] = $index; $step['completed'] = false; $step['running'] = false; $collection[$stepName] = $step; if ($previousStep) { $collection[$previousStep['name']]['next'] = $stepName; } $previousStep = $step; } return $collection; } public function reviveTask($value) { if ($value instanceof Moto\System\Backup\BackupTask) { return $value; } if (is_array($value)) { $value = Moto\Util::getValue($value, 'uid'); } if (!is_string($value)) { return null; } return Moto\System\Backup\BackupTask::find($value); } public function executeTask($task) { $task = $this->reviveTask($task); if (!$task) { throw new Moto\Exception('Can not load task', 404); } return $task->execute()->save(); } public function createTaskStepObject($name) { if (!array_key_exists($name, static::$_registeredSteps)) { return null; } $meta = static::$_registeredSteps[$name]; $class = $meta['class']; if (!class_exists($class)) { return null; } $step = new $class([ 'name' => $name, ]); if (!($step instanceof Moto\System\Backup\Step\AbstractStep)) { if (Moto\System::isDevelopmentStage()) { throw new Moto\Exception(__CLASS__ . '::' . __FUNCTION__ . ' : Step "' . $name . '" is not compatible'); } return null; } return $step; } public function createFileByPath($path) { if (!is_string($path) || !preg_match('/^' . $this->getConfig('storagePath') . '\/[0-9]+\/[^\/]+\.zip/', $path)) { throw new Moto\System\Exception(Moto\System\Exception::ERROR_BAD_REQUEST_MESSAGE, Moto\System\Exception::ERROR_BAD_REQUEST_CODE, [ 'path' => ['regexNotMatch'], ]); } return Moto\System\Backup\BackupFile::createFromPath($path); } public function findTasks(Closure $filter = null) { $collection = new Illuminate\Support\Collection(); $tempFolder = $this->getConfig('tempPath'); $absoluteTempFolderPath = Moto\System::getAbsolutePath($tempFolder); if (!is_dir($absoluteTempFolderPath)) { return $collection; } $list = Moto\Util::scanDir($absoluteTempFolderPath, '', [ 'addDir' => true, 'maxLevel' => 0, ]); foreach ($list as $path) { $absolutePath = $absoluteTempFolderPath . '/' . $path; if (!is_dir($absolutePath)) { continue; } $task = $this->reviveTask($path); if (!$task) { continue; } if ($filter && !$filter($task)) { continue; } $collection->push($task); } return $collection; } } 