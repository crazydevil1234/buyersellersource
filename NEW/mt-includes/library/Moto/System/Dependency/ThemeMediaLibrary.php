<?php
namespace Moto\System\Dependency; use Moto; class ThemeMediaLibrary extends Moto\System\Dependency\AbstractDependency { const CACHE_LIFETIME = 600; const TEMP_FOLDER_PATH = '@updateTemp/media'; protected $_attributes = [ 'target' => null, 'build' => null, 'downloading' => [], 'downloaded' => [], 'installing' => [], 'installed' => [], ]; public function getProgress() { $stats = [ 'total' => 0, 'downloading' => count($this->downloading), 'downloaded' => count($this->downloaded), 'installing' => count($this->installing), 'installed' => count($this->installed), ]; $stats['total'] = $stats['downloading'] + $stats['downloaded'] + $stats['installing'] + $stats['installed']; return $stats; } public function setBuildAttribute($value) { if (!is_int($value) && $value !== null) { return false; } $this->_attributes['build'] = $value; return true; } public function setTargetAttribute($value) { if ($this->_attributes['target']) { return false; } if (!is_array($value) || empty($value)) { return false; } $value = Moto\Util::arrayOnly($value, ['name', 'label', 'version', 'build', 'template_id']); if (count($value) !== 5) { return false; } $this->_attributes['target'] = $value; return true; } public function getRequirements() { return false; } public function prepareDependencies() { $downloads = $this->getDownloads(); $downloading = []; $downloaded = []; foreach ($downloads as $dependency) { if (Moto\Util::getValue($dependency, 'downloaded')) { $downloaded[] = $dependency; } else { $downloading[] = $dependency; } } $this->downloading = $downloading; $this->downloaded = $downloaded; return true; } public function getDownloads() { try { $apiRecords = $this->fetchRequirementItems(); } catch (\Exception $e) { if ($e instanceof Moto\System\Exception) { throw $e; } Moto\System\Log::debug('[' . __CLASS__ . '::' . __FUNCTION__ . '] : Exception : ' . $e->getMessage()); throw new Moto\System\Exception('Cant fetch RequirementItems', 500, [ [ 'name' => 'THEME_MEDIA_LIBRARY_CANT_COLLECT_ITEMS', 'params' => [ ], ] ]); } try { $downloads = $this->sanitizeDownloads($apiRecords); } catch (\Exception $e) { if ($e instanceof Moto\System\Exception) { throw $e; } Moto\System\Log::debug('[' . __CLASS__ . '::' . __FUNCTION__ . '] : Exception : ' . $e->getMessage()); throw new Moto\System\Exception('Cant fetch RequirementItems', 500, [ [ 'name' => 'THEME_MEDIA_LIBRARY_CANT_COLLECT_ITEMS', 'params' => [ ], ] ]); } if (Moto\System::isDevelopmentStage()) { $max = (int) Moto\Config::get('dev_update_theme.maxMediaItems'); if ($max > 0) { $downloads = array_slice($downloads, 0, $max); } } return $downloads; } protected function generateTempFilePath($input) { if (!is_array($input) || empty($input['path']) || empty($input['file_md5'])) { Moto\System\Log::debug('[' . __CLASS__ . '::' . __FUNCTION__ . '] : invalid input ', [ 'input' => $input, ]); return false; } return static::TEMP_FOLDER_PATH . '/' . md5($input['path']) . '_' . $input['file_md5'] . '.tmp'; } protected function sanitizeDownloads($input, $ignoreExists = true) { if (!is_array($input)) { throw new Moto\Exception('Invalid collection'); } $collection = []; $isValid = function ($record, $fields) { $required = Moto\Util::arrayOnly($record, $fields); $required = array_map('trim', $required); $required = array_filter($required); return (count($required) === count($fields)); }; foreach ($input as $record) { if (!$isValid($record, ['name', 'path', 'url', 'file_md5', 'file_size', 'type',])) { Moto\System\Log::debug('[' . __CLASS__ . '::' . __FUNCTION__ . '] : invalid records ', [ 'record' => Moto\Util::arrayOnly($record, ['_uid', 'uid', 'id', 'name', 'path', 'file_md5', 'type']), ]); continue; } if ($record['type'] !== 'file') { Moto\System\Log::error('[' . __CLASS__ . '::' . __FUNCTION__ . '] : Not compatibility type "' . $record['type'] . '" must be a "file" ', [ 'record' => Moto\Util::arrayOnly($record, ['_uid', 'uid', 'id', 'name', 'path', 'file_md5', 'type']), ]); throw new Moto\Exception('Invalid records type'); } $record['file_size'] = (int) $record['file_size']; $record['tempFilePath'] = $this->generateTempFilePath($record); $absolutePath = Moto\System::getUploadAbsolutePath($record['path']); $fileExists = file_exists($absolutePath); $record['downloaded'] = $fileExists; if ($ignoreExists || !$fileExists) { $collection[] = Moto\Util::arrayExcept($record, ['children']); } $children = (array) Moto\Util::getValue($record, 'children'); if (count($children) > 0) { foreach ($children as $child) { if (!$isValid($record, ['path', 'url', 'file_md5', 'file_size',])) { Moto\System\Log::debug('[' . __CLASS__ . '::' . __FUNCTION__ . '] : invalid child ', [ 'parent' => [ 'path' => $record['path'], ], 'child' => $child, ]); continue; } $child['file_size'] = (int) $child['file_size']; $absolutePath = Moto\System::getUploadAbsolutePath($child['path']); $fileExists = file_exists($absolutePath); if (!$ignoreExists && $fileExists) { continue; } $child['downloaded'] = $fileExists; $child['parent'] = $record['path']; $child['tempFilePath'] = $this->generateTempFilePath($child); $collection[] = $child; } } } return $collection; } protected function createHttpClient() { $curlOptions = [ CURLOPT_FOLLOWLOCATION => false, CURLOPT_CONNECTTIMEOUT => 10, CURLOPT_TIMEOUT => 15, ]; if (Moto\System::isDevelopmentStage()) { $devOption = Moto\Config::get('dev_update_theme.curloptions'); if (is_array($devOption)) { $curlOptions = $devOption; } } $client = new Moto\Http\Client(null, [ 'streamtmpdir' => '@updateTemp', 'curloptions' => $curlOptions, ]); return $client; } protected function fetchRequirementItemsFromApi() { $collection = []; $apiUrl = Moto\Config::get('externalModules.themeContent.apiUrl'); if (!$apiUrl) { return $collection; } $theme = $this->target; if (!is_array($theme)) { throw new Moto\Exception('Cant retrieve information about theme'); } $query = [ 'name' => $theme['name'], 'template_id' => $theme['template_id'], 'buildFrom' => $theme['build'], 'buildTo' => $this->build, ]; if (Moto\System::isDevelopmentStage()) { $requestQuery = Moto\Config::get('dev_update_theme.mediaRequestQuery'); if (is_array($requestQuery)) { $query = $requestQuery; } } $query['product_id'] = Moto\System\ProductInformation::getProductId(); $query['engine'] = [ 'version' => Moto\System\Settings::get('version'), 'build' => Moto\System\Settings::get('build'), ]; $query['token'] = Moto\System\ProductInformation::get('token'); $url = Moto\Util::extendUrl($apiUrl, [ 'query' => $query, ], [ 'query' => 'join' ] ); $client = $this->createHttpClient(); $client->setUri($url); $client->send(); $response = $client->getResponse(); $statusCode = (int) $response->getStatusCode(); $adapter = $client->getAdapter(); $adapter->close(); if ($statusCode !== 200) { throw new Moto\System\Exception('Cant connect to Theme Image API Server', $statusCode, [ [ 'name' => 'REMOTE_CONNECTION_ERROR', 'params' => [ 'http_code' => $statusCode, ], ] ]); } $content = $response->getBody(); $content = json_decode($content, true); if (!is_array($content)) { throw new Moto\Exception('Cant parse response from API Server'); } if ((int) Moto\Util::getValue($content, 'status') < 1) { throw new Moto\Exception('API Server return response with bad status'); } if (!array_key_exists('body', $content)) { throw new Moto\Exception('API Server return response without body'); } $records = Moto\Util::getValue($content, 'body.records'); if (!is_array($records)) { throw new Moto\Exception('API Server return response without records'); } if (Moto\System::isDevelopmentStage()) { $recordsFilter = Moto\Config::get('dev_update_theme.mediaItemsFilter'); if (is_callable($recordsFilter)) { $records = $recordsFilter($records); if (!is_array($records)) { throw new Moto\System\Exception('"mediaItemsFilter" return invalid response'); } } } return $records; } protected function getCacheFilePath() { $theme = $this->target; if (!is_array($theme)) { throw new Moto\Exception('Cant retrieve information about theme'); } $cachePath = '@updateTemp/theme_' . $theme['name'] . '_' . $theme['build'] . '-' . $this->build . '_media_items.json'; return $cachePath; } protected function fetchRequirementItems() { $theme = $this->target; if (!is_array($theme)) { throw new Moto\Exception('Cant retrieve information about theme'); } $cachePath = $this->getCacheFilePath(); $absoluteCachePath = Moto\System::getAbsolutePath($cachePath); $cacheLifetime = 0; if (Moto\System::isDevelopmentStage()) { $cacheLifetime = (int) Moto\Config::get('dev_update_theme.cacheLifetime'); } $cacheLifetime = (int) $cacheLifetime; if ($cacheLifetime < 1) { $cacheLifetime = static::CACHE_LIFETIME; } if (file_exists($absoluteCachePath) && (time() - filemtime($absoluteCachePath) < $cacheLifetime)) { $content = file_get_contents($absoluteCachePath); $content = json_decode($content, true); $records = Moto\Util::getValue($content, 'body.records'); if (is_array($records)) { return $records; } } $records = $this->fetchRequirementItemsFromApi(); $content = [ 'created_at' => time(), 'theme' => $theme, 'body' => [ 'records' => $records, ] ]; Moto\Util::filePutContents($absoluteCachePath, json_encode($content, JSON_PRETTY_PRINT)); return $records; } protected function isDependencyAreFullyDownloaded($dependency) { $destination = trim((string) Moto\Util::getValue($dependency, 'tempFilePath')); $absolutePath = Moto\System::getAbsolutePath($destination); if (!file_exists($absolutePath)) { return false; } return (filesize($absolutePath) === $dependency['file_size'] && md5_file($absolutePath) === $dependency['file_md5']); } protected function isDownloadedDependencyAreBad($dependency) { $destination = trim((string) Moto\Util::getValue($dependency, 'tempFilePath')); $absolutePath = Moto\System::getAbsolutePath($destination); if (!file_exists($absolutePath)) { return false; } $fileSize = filesize($absolutePath); if ($fileSize === $dependency['file_size']) { $fileMd5 = md5_file($absolutePath); if ($fileMd5 === $dependency['file_md5']) { return false; } Moto\System\Log::debug('[' . __CLASS__ . '::' . __FUNCTION__ . '] : hash of downloaded dependency invalid', [ 'file_md5' => $fileMd5, 'dependency' => Moto\Util::arrayOnly($dependency, ['file_md5', '_uid', 'uid', 'id', 'path']), ]); return true; } elseif ($fileSize > $dependency['file_size']) { Moto\System\Log::debug('[' . __CLASS__ . '::' . __FUNCTION__ . '] : downloaded dependency biggest that need', [ 'file_size' => $fileSize, 'dependency' => Moto\Util::arrayOnly($dependency, ['file_size', '_uid', 'uid', 'id', 'path']), ]); return true; } return false; } protected function downloadDependency($dependency, Moto\Http\Client $client = null) { if (!is_array($dependency)) { return false; } $destination = trim((string) Moto\Util::getValue($dependency, 'tempFilePath')); if ($destination === '') { return false; } $absolutePath = Moto\System::getAbsolutePath($destination); clearstatcache(true, $absolutePath); if (file_exists($absolutePath)) { if ($this->isDependencyAreFullyDownloaded($dependency)) { $dependency['downloaded'] = true; return $dependency; } if ($this->isDownloadedDependencyAreBad($dependency)) { unlink($absolutePath); } } $url = trim((string) Moto\Util::getValue($dependency, 'url')); if ($url === '') { return false; } if (!$client) { $client = $this->createHttpClient(); } $client->setUri($url); try { Moto\System\Log::debug('[' . __CLASS__ . '::' . __FUNCTION__ . '] : start download dependency', [ 'dependency' => Moto\Util::arrayOnly($dependency, ['_uid', 'uid', 'id', 'path', 'file_size',]), ]); $result = $client->downloadToFile($destination, [ 'partial' => true, ]); if ($result['error']) { Moto\System\Log::error('[' . __CLASS__ . '::' . __FUNCTION__ . '] : downloading failed', [ 'result' => Moto\Util::arrayOnly($result, ['http_code', 'connection_error',]), 'dependency' => Moto\Util::arrayOnly($dependency, ['_uid', 'uid', 'id', 'path', 'file_size',]), ]); throw new Moto\System\Exception('CANT_DOWNLOAD_RESOURCE', $result['http_code'], [ [ 'name' => 'CANT_DOWNLOAD_RESOURCE', 'params' => [ 'http_code' => $result['http_code'], ], ] ]); } Moto\System\Log::debug('[' . __CLASS__ . '::' . __FUNCTION__ . '] : downloading finished', [ 'result' => Moto\Util::arrayOnly($result, ['http_code', 'written', 'downloaded', 'total_time']), 'dependency' => Moto\Util::arrayOnly($dependency, ['_uid', 'uid', 'id', 'path', 'file_size',]), ]); } catch (\Exception $e) { if ($e instanceof Moto\System\Exception) { throw $e; } return false; } if ($this->isDownloadedDependencyAreBad($dependency)) { Moto\System\Log::error('[' . __CLASS__ . '::' . __FUNCTION__ . '] : downloaded resource are bad', [ 'dependency' => Moto\Util::arrayOnly($dependency, ['_uid', 'uid', 'id', 'path', 'file_size', 'file_md5', 'tempFilePath',]), ]); throw new Moto\System\Exception('INVALID_DOWNLOADED_RESOURCE', 500, [ [ 'name' => 'INVALID_DOWNLOADED_RESOURCE', 'params' => [ 'dependency' => Moto\Util::arrayOnly($dependency, ['_uid', 'uid', 'id', 'path', 'file_size', 'file_md5', 'tempFilePath',]), ], ] ]); } if ($this->isDependencyAreFullyDownloaded($dependency)) { $dependency['downloaded'] = true; } return $dependency; } protected function syncDependenciesWithTemp() { $dependencies = $this->_attributes['downloading']; foreach ($dependencies as $dependency) { if ($this->isDependencyAreFullyDownloaded($dependency)) { $dependency['downloaded'] = true; $this->_attributes['downloaded'][] = $dependency; array_shift($this->_attributes['downloading']); } } } protected function getFirstDependencyForDownload() { $dependencies = $this->_attributes['downloading']; foreach ($dependencies as $dependency) { if (!$dependency['downloaded'] && !$this->isDependencyAreFullyDownloaded($dependency)) { return $dependency; } $dependency['downloaded'] = true; $this->_attributes['downloaded'][] = $dependency; array_shift($this->_attributes['downloading']); } return null; } public function downloadDependencies($limits = []) { $startAt = microtime(1); $maxItems = (int) Moto\Util::getValue($limits, 'maxItems', -1); $maxTime = (float) Moto\Util::getValue($limits, 'maxTime', 10); $index = 0; while ($dependency = $this->getFirstDependencyForDownload()) { if (!$dependency) { return true; } $dependency = $this->downloadDependency($dependency); if (!$dependency) { return false; } if (Moto\Util::getValue($dependency, 'downloaded')) { $this->_attributes['downloaded'][] = $dependency; array_shift($this->_attributes['downloading']); } $doneAt = microtime(1); $working = $doneAt - $startAt; if ($maxTime > 0 && $working >= $maxTime) { break; } $index++; if ($maxItems > 0 && $index >= $maxItems) { break; } } return true; } protected function getFirstDependencyForInstall() { $dependencies = $this->_attributes['downloaded']; foreach ($dependencies as $dependency) { if ($dependency['downloaded']) { return $dependency; } if ($this->isDependencyAreFullyDownloaded($dependency)) { return $dependency; } Moto\System\Log::error('[' . __CLASS__ . '::' . __FUNCTION__ . '] : Dependency is not downloaded : ', [ 'dependency' => Moto\Util::arrayOnly($dependency, ['_uid', 'uid', 'id', 'path']), ]); throw new Moto\Exception('Some dependency is not downloaded yet'); } return null; } protected function getMediaItemTable() { static $table = null; if ($table) { return $table; } $table = new Moto\Application\MediaLibrary\MediaItemsTable(); $table->useResultAsModel(true); return $table; } protected function installDependency($dependency) { $table = $this->getMediaItemTable(); $defaultFolder = 0; if (Moto\System::isDevelopmentStage()) { $mediaFolderId = (int) Moto\Config::get('dev_update_theme.mediaFolderId'); if ($mediaFolderId > 0) { $defaultFolder = $mediaFolderId; } } $parent = Moto\Util::getValue($dependency, 'parent'); if ($parent) { $record = $table->getByPath($parent); if (!$record) { throw new Moto\Exception('Parent record not exists "' . $parent . '"'); } $thumbnailSource = $dependency['tempFilePath']; if (file_exists(Moto\System::getUploadAbsolutePath($dependency['path']))) { $thumbnailSource = null; } $thumbnailInfo = $record->parseThumbnailPath($dependency['path']); if (!$thumbnailInfo) { Moto\System\Log::error('[' . __CLASS__ . '::' . __FUNCTION__ . '] : Cant parse thumbnail path "' . $dependency['path'] . '"'); return false; } $thumbnailInfo = (array) $thumbnailInfo; if ($record->isExistsThumbnail($thumbnailInfo['name'])) { return $dependency; } if (!$record->addThumbnail($dependency['path'], $thumbnailSource)) { Moto\System\Log::error('[' . __CLASS__ . '::' . __FUNCTION__ . '] : Cant register thumbnail', [ 'record' => Moto\Util::arrayOnly($record->toArray(), ['id', 'path', 'name']), 'dependency' => Moto\Util::arrayOnly($dependency, ['_uid', 'uid', 'id', 'path']), ]); throw new Moto\Exception('Cant register thumbnail'); } if ($table->save($record)) { if ($thumbnailSource) { @unlink(Moto\System::getAbsolutePath($thumbnailSource)); } return $dependency; } return false; } $record = $table->getByPath($dependency['path']); if ($record) { if (array_key_exists('is_protected', $dependency)) { if ((boolean) $record->is_protected !== (boolean) $dependency['is_protected']) { Moto\System\Log::debug('Change "is_protected" for ' . $dependency['path']); $record->is_protected = $dependency['is_protected']; $table->save($record); } } else { Moto\System\Log::debug('Media item already exists ' . $dependency['path']); } return $dependency; } $destination = Moto\System::getUploadAbsolutePath($dependency['path']); $source = Moto\System::getAbsolutePath($dependency['tempFilePath']); if (!Moto\Util::copyFile($source, $destination)) { throw new Moto\Exception('Cant copy file'); } $itemModel = new Moto\Application\MediaLibrary\MediaItemModel(); $itemModel->folder_id = $defaultFolder; $user = Moto\Authentication\Service::getUser(); if ($user) { $itemModel->author_id = $user->id; } $itemModel->setDataFromUploadedFile($source); $itemModel->setFromArray(Moto\Util::arrayOnly($dependency, [ 'is_protected', 'path', 'name', 'title', 'caption', 'alt', ])); if ($table->insert($itemModel)) { unlink($source); return $dependency; } return false; } public function installDependencies($limits = []) { $startAt = microtime(1); $maxItems = (int) Moto\Util::getValue($limits, 'maxItems', -1); $maxTime = (float) Moto\Util::getValue($limits, 'maxTime', 10); $index = 0; while ($dependency = $this->getFirstDependencyForInstall()) { if (!$dependency) { return true; } $dependency = $this->installDependency($dependency); if (!$dependency) { return false; } $this->_attributes['installed'][] = $dependency; array_shift($this->_attributes['downloaded']); $doneAt = microtime(1); $working = $doneAt - $startAt; if ($maxTime > 0 && $working >= $maxTime) { break; } $index++; if ($maxItems > 0 && $index >= $maxItems) { break; } } return true; } public function cleaningTemporary() { $dependencies = array_merge( $this->_attributes['downloaded'], $this->_attributes['downloading'], $this->_attributes['installing'], $this->_attributes['installed'] ); foreach ($dependencies as $dependency) { $tempFilePath = trim((string) Moto\Util::getValue($dependency, 'tempFilePath')); if ($tempFilePath === '') { continue; } $absoluteTempFilePath = Moto\System::getAbsolutePath($tempFilePath); if (file_exists($absoluteTempFilePath)) { @unlink($absoluteTempFilePath); } } $cacheFilePath = $this->getCacheFilePath(); $absoluteCacheFilePath = Moto\System::getAbsolutePath($cacheFilePath); if ($absoluteCacheFilePath !== '' && file_exists($absoluteCacheFilePath)) { @unlink($absoluteCacheFilePath); } return true; } } 