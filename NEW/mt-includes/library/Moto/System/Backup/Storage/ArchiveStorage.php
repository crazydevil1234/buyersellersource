<?php
namespace Moto\System\Backup\Storage; use Moto; use ZipArchive; use RecursiveDirectoryIterator; class ArchiveStorage extends AbstractStorage { protected $_archive; public function getArchive() { if ($this->_archive) { return $this->_archive; } $filePath = $this->getArchivePath(); $absoluteFilePath = Moto\System::getAbsolutePath($filePath); $this->_archive = new ZipArchive(); if (file_exists($filePath)) { $opened = $this->_archive->open($absoluteFilePath); } else { $opened = $this->_archive->open($absoluteFilePath, ZipArchive::CREATE); } if ($opened !== true) { throw new Moto\Exception('Cant create Archive'); } return $this->_archive; } public function getArchivePath() { return $this->_backup->archivePath; } protected function _addEmptyDir($path, $mode = null) { return $this->getArchive()->addEmptyDir($path); } protected function _addFile($source, $destination) { return $this->getArchive()->addFile($source, $destination); } protected function _addFromString($destination, $content = '') { return $this->getArchive()->addFromString($destination, $content); } public function addContentFromStorage(Moto\System\Backup\Storage\AbstractStorage $storage, array $options = []) { $maxItems = (int) Moto\Util::getValue($options, 'maxItems'); if ($maxItems < 0) { throw new Moto\Exception('Bad options "maxItems" value'); } $maxTime = (int) Moto\Util::getValue($options, 'maxTime'); if ($maxTime < 0) { throw new Moto\Exception('Bad options "maxTime" value'); } $passedItemsCount = 0; $passedFiles = []; $passedTime = null; $startedAt = microtime(true); $timers = [ 'total' => null, 'startedAt' => $startedAt, 'removingFiles' => null, 'removingEmptyDir' => null, ]; $timestamp = microtime(true); $queue = $storage->getQueue(); $timers['openingQueue'] = microtime(true) - $timestamp; if (!$queue) { throw new Moto\Exception('Cant retrieve disk queue'); } $timestamp = microtime(true); $archive = $this->getArchive(); $timers['openingArchive'] = microtime(true) - $timestamp; $tempRootPath = $storage->getBasePath(); Moto\System\Log::debug('[' . __CLASS__ . '::' . __FUNCTION__ . '] : start flushing', [ 'maxItems' => $maxItems, 'maxTime' => $maxTime, ]); $passedDirectories = []; foreach ($queue as $index => $file) { $filename = $file->getFilename(); $relativePath = $file->getSubPath(); if ($relativePath !== '') { $relativePath .= '/'; } $relativePath .= $filename; $absolutePath = $tempRootPath . '/' . $relativePath; if ($file->isDir()) { array_unshift($passedDirectories, $relativePath); if ($this->hasName($relativePath)) { continue; } $added = $this->_addEmptyDir($relativePath); } else { if (!$file->isReadable()) { throw new Moto\Exception('Cant add item to archive because file not readable'); } $added = $this->_addFile($absolutePath, $relativePath); if ($added) { $passedFiles[] = $relativePath; } } if (!$added) { Moto\System\Log::error('[' . __CLASS__ . '::' . __FUNCTION__ . '] : Failed adding item', [ 'path' => $relativePath, 'type' => ($file->isDir() ? 'directory' : 'file'), ]); throw new Moto\Exception('Cant add item to zip'); } $passedItemsCount++; if ($maxItems > 0 && $passedItemsCount >= $maxItems) { Moto\System\Log::debug('[' . __CLASS__ . '::' . __FUNCTION__ . '] : break flushing by maxItems', [ 'passedItems' => $passedItemsCount, 'maxItems' => $maxItems, ]); break; } $passedTime = microtime(true) - $startedAt; if ($maxTime > 0 && $passedTime >= $maxTime) { Moto\System\Log::debug('[' . __CLASS__ . '::' . __FUNCTION__ . '] : break flushing by maxTime', [ 'passedTime' => $passedTime, 'maxTime' => $maxTime, ]); break; } } $timestamp = microtime(true); Moto\System\Log::debug('[' . __CLASS__ . '::' . __FUNCTION__ . '] : start closing archive'); $this->flush(); $timers['closingArchive'] = microtime(true) - $timestamp; usleep(50); if (count($passedFiles) > 0) { Moto\System\Log::debug('[' . __CLASS__ . '::' . __FUNCTION__ . '] : remove archived files', [ 'count' => count($passedFiles), ]); $timestamp = microtime(true); foreach ($passedFiles as $path) { $storage->deleteName($path); } $timers['removingFiles'] = microtime(true) - $timestamp; } if (count($passedDirectories) > 0) { Moto\System\Log::debug('[' . __CLASS__ . '::' . __FUNCTION__ . '] : remove directories if them empty', [ 'count' => count($passedDirectories), ]); $timestamp = microtime(true); foreach ($passedDirectories as $path) { $isEmpty = $storage->isEmptyDir($path); if ($isEmpty === null) { Moto\System\Log::error('isEmpty is NULL', [ 'path' => $path, 'storage' => get_class($storage), ]); throw new Moto\Exception('Cant detect is directory are empty'); } if ($isEmpty) { $storage->deleteName($path); } } $timers['removingEmptyDir'] = microtime(true) - $timestamp; } $timers['finishedAt'] = microtime(true); $timers['total'] = $timers['finishedAt'] - $timers['startedAt']; Moto\System\Log::debug('[' . __CLASS__ . '::' . __FUNCTION__ . '] : flushing report', [ 'timers' => $timers, 'passedTime' => $passedTime, 'passedItems' => $passedItemsCount, ]); return true; } protected function flush() { $this->getArchive()->close(); $this->_archive = null; } public function hasName($name) { if ((boolean) $this->getArchive()->statName($name)) { return true; } return (boolean) $this->getArchive()->statName($name . '/'); } public function _deleteName($name) { return (boolean) $this->getArchive()->deleteName($name); } }