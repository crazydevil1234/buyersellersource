<?php
namespace Moto\Validator; use Moto; class FileExtension extends Moto\Validator\AbstractValidator { const FALSE_EXTENSION = 'fileExtensionFalse'; const NOT_FOUND = 'fileExtensionNotFound'; protected $messageTemplates = array( self::FALSE_EXTENSION => 'File has an incorrect extension "%value%"', self::NOT_FOUND => 'Cant retrieve file extension from "&value%"', ); protected $options = [ 'caseSensitive' => true, 'extensions' => [], ]; public function setCaseSensitive($value) { $this->options['caseSensitive'] = (boolean) $value; return $this; } public function setExtensions($value) { if (is_string($value)) { $value = explode(',', $value); $value = array_map('trim', $value); $value = array_filter($value); $value = array_values($value); } if (!is_array($value)) { throw new \InvalidArgumentException('Option "extensions" : value is not a array'); } $this->options['extensions'] = $value; return $this; } public function isValid($value) { if (!is_string($value)) { $this->error(static::NOT_FOUND, $value); return false; } $pathInfo = pathinfo($value); $extension = Moto\Util::getValue($pathInfo, 'extension'); if (empty($extension)) { $this->error(static::NOT_FOUND, $value); return false; } $extensions = $this->getOption('extensions'); if (!$this->getOption('caseSensitive')) { $extension = strtolower($extension); $extensions = array_map('strtolower', $extensions); } if (in_array($extension, $extensions, true)) { return true; } $this->error(self::FALSE_EXTENSION, $extension); return false; } } 