<?php
namespace Moto\Website; use Moto; class MaintenanceMode { protected static function _getFileMarkerPath() { return Moto\System::getAbsolutePath('@websiteStorageDir/maintenance.json'); } protected static function _getStaticPageFilePath() { return Moto\System::getAbsolutePath('@mainTemplates/maintenance/static.html'); } protected static function _getCustomPageFilePath() { return Moto\System::getAbsolutePath('@websiteStorageDir/maintenance.html'); } public static function isEnabled() { return file_exists(static::_getFileMarkerPath()); } public static function showPage() { header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); header('Cache-Control: no-store, no-cache, must-revalidate'); header('Cache-Control: post-check=0, pre-check=0', false); header('Pragma: no-cache'); $content = 'The website is currently down for maintenance. We will be back soon!'; $customPagePath = static::_getCustomPageFilePath(); if (file_exists($customPagePath) && is_readable($customPagePath)) { $content = file_get_contents($customPagePath); } else { $staticPagePath = static::_getStaticPageFilePath(); if (file_exists($staticPagePath) && is_readable($staticPagePath)) { $content = file_get_contents($staticPagePath); } } $response = Moto\System::getResponse(); $response->setStatusCode(503); $response->setContent($content); echo $response; } public static function turnOn() { return (boolean) Moto\Util::filePutContents(static::_getFileMarkerPath(), '{}'); } public static function turnOff() { if (static::isEnabled()) { return unlink(static::_getFileMarkerPath()); } return true; } public static function updateCustomPage($context) { $customPagePath = static::_getCustomPageFilePath(); if (file_exists($customPagePath) && !is_writable($customPagePath)) { throw new \Exception('FILE_NOT_WRITABLE'); } if (!is_array($context)) { throw new \Exception('INVALID_CONTEXT'); } $twig = Moto\Render::getInstance(); $template = $twig->load('@mainTemplates/maintenance/template.twig.html'); $content = $template->render($context); return Moto\Util::filePutContents($customPagePath, $content); } } 