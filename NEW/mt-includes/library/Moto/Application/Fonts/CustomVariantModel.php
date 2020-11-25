<?php
namespace Moto\Application\Fonts; use Moto; use Illuminate; class CustomVariantModel extends Moto\System\SimpleModel { protected $fillable = [ 'name', 'file_name', 'file_path', 'file_size', 'file_hash', ]; protected $casts = [ 'name' => 'string', 'file_name' => 'string', 'file_path' => 'string', 'file_size' => 'int', 'file_hash' => 'string', ]; protected $attributes = [ 'name' => '', 'style' => null, 'weight' => null, 'file_name' => null, 'file_path' => null, 'file_size' => null, 'file_hash' => null, ]; protected $hidden = [ ]; protected $_font = null; public function setNameAttribute($value) { $style = 'normal'; $weight = '400'; if ($value === 'normal' || $value === 'regular') { $value = '400'; } elseif ($value === 'italic') { $value = '400italic'; } elseif ($value === 'bold') { $value = '700'; } if (preg_match('/^([0-9]+)(?<style>italic|normal)?$/', $value, $match)) { $weight = $match[1]; $style = Moto\Util::getValue($match, 'style', 'normal'); } $this->attributes['name'] = $value; $this->attributes['style'] = $style; $this->attributes['weight'] = $weight; } public function setStyleAttribute($value) { return false; } public function setWeightAttribute($value) { return false; } public function setFontModel(Moto\Database\Models\Font $parent = null) { $this->_font = $parent; return $this; } public function getFontModel() { return $this->_font; } public function attachFontFile($file) { $font = $this->getFontModel(); if (!$font || empty($this->name) || !$font->exists) { return false; } if (is_string($file)) { $file = [ 'path' => $file, ]; } $debug = false; if ($debug) { echo __FUNCTION__ . " ()\n"; echo "\$source : " . var_export($file, 1) . "\n"; } if (!is_array($file)) { return false; } $path = Moto\Util::getValue($file, 'path'); $pathInfo = pathinfo($path); if (!array_key_exists('name', $file)) { $file['name'] = $pathInfo['basename']; } $nameInfo = pathinfo($file['name']); if ($debug) { echo "\$info : " . var_export($pathInfo, 1) . "\n"; echo "\$nameInfo : " . var_export($nameInfo, 1) . "\n"; } $extension = strtolower((string) Moto\Util::getValue($nameInfo, 'extension', '')); if ($extension !== 'woff') { return false; } $sourceFilePath = $file['path']; $absoluteSourceFilePath = Moto\System::getAbsolutePath($sourceFilePath); if (!file_exists($absoluteSourceFilePath)) { return false; } $fileHash = md5_file($absoluteSourceFilePath); $fileName = $font->id . '_' . $this->name . '_' . $fileHash; $destination = '@customFontsDir/' . $fileName . '.' . $extension; $absoluteDestinationPath = Moto\System::getAbsolutePath($destination); if (!Moto\Util::copyFile($absoluteSourceFilePath, $absoluteDestinationPath)) { return false; } $this->file_name = $file['name']; $this->file_path = $destination; $this->file_size = filesize($absoluteDestinationPath); $this->file_hash = $fileHash; $font->addVariant($this); return true; } public function generateCssContent() { $font = $this->getFontModel(); if (!$font || empty($this->name) || !$font->exists || empty($this->file_path)) { return false; } $src = Moto\System::getAbsoluteUrl($this->file_path); if (empty($src)) { return false; } $family = $font->family; if (preg_match('/^([^,]+)(.*)$/', $family, $match)) { $family = $match[1]; } $attrs = [ 'font-family' => $family, 'src' => 'url(' . $src . ') format(\'woff\')', 'font-style' => $this->style, 'font-weight' => $this->weight, ]; $css = '@font-face {' . "\n"; foreach ($attrs as $name => $value) { $value = trim($value); if ($value === '') { return false; } $css .= "\t" . $name . ':' . $value . ';' . "\n"; } $css .= '}'; return $css; } public function delete() { if (!$this->file_path) { return true; } $filePath = Moto\System::getAbsolutePath($this->file_path); if (!empty($filePath) && file_exists($filePath)) { unlink($filePath); } return true; } } 