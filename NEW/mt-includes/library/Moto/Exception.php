<?php
namespace Moto; use Moto; class Exception extends \Exception { protected static $_autoLogging = false; protected $_errors = array(); public function __construct($message = '', $code = 0, $errors = null, \Exception $previous = null) { parent::__construct($message, (int) $code, $previous); $this->setErrors($errors); $this->_postConstruct(); if (static::$_autoLogging) { $this->_logging(); } } protected function _postConstruct() { } public static function enableAutoLogging() { static::$_autoLogging = true; } public static function disableAutoLogging() { static::$_autoLogging = false; } protected function _logging() { } public function setError($name, $value) { $this->_errors[$name] = $value; } public function setErrors($errors) { if (!is_array($errors) && !is_object($errors)) { return false; } foreach ($errors as $key => $value) { $this->setError($key, $value); } return true; } public function getErrors() { return $this->_errors; } public function getData() { return array( 'errors' => $this->getErrors() ); } } 