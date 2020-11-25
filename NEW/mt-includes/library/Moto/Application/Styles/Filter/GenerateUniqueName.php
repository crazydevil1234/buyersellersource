<?php
namespace Moto\Application\Styles\Filter; use Moto\Filter\AbstractFilter; use Zend\Filter\Exception; use Zend\Validator\Db\NoRecordExists; use Moto; class GenerateUniqueName extends AbstractFilter { protected $_options = array( 'suffix' => ' ', 'maxLength' => 200, 'adapter' => null, 'table' => null, 'field' => null ); function __construct($options = array()) { if (!array_key_exists('adapter', $options)) { $options['adapter'] = Moto\Config::get('databaseAdapter'); } parent::setOptions($options); } public function filter($value) { if (!is_string($value)) { return $value; } $dbAdapter = $this->getOption('adapter'); $table = $this->getOption('table'); $field = $this->getOption('field'); if (empty($table)) { throw new Exception\InvalidArgumentException(sprintf( '"%s" expects valid table name; received "%s"', __METHOD__, $table )); } if (empty($field)) { throw new Exception\InvalidArgumentException(sprintf( '"%s" expects valid table field name; received "%s"', __METHOD__, $field )); } $isUnique = false; $name = $value; $index = 2; $getMaxLength = function($maxLength, $suffix, $index) { return $maxLength - strlen($suffix) - strlen($index); }; $suffix = $this->getOption('suffix'); $maxLength = $getMaxLength($this->getOption('maxLength'), $suffix, $index); $value = trim($value, $suffix); if (strlen($value) > $maxLength) { $value = trim(substr($value, 0, $maxLength), $suffix); } while (!$isUnique) { $name = $value . $suffix . $index; if (strlen($name) > $this->getOption('maxLength')) { $maxLength = $getMaxLength($this->getOption('maxLength'), $suffix, $index); $name = substr($name, 0, $maxLength) . $suffix . $index; } $notExistsValidator = new NoRecordExists(array( 'table' => Moto\Config::get('database.prefix') . $table, 'field' => $field, 'adapter' => $dbAdapter )); $isUnique = $notExistsValidator->isValid($name); $index++; if ($index > 500) { throw new \OverflowException('Stack overflow', 400); } } return $name; } public function setSuffix($suffix) { if (is_string($suffix) && strlen($suffix) < 4) { $this->_options['suffix'] = $suffix; } } public function setMaxLength($maxLength) { if (is_numeric($maxLength) && $maxLength > 4) { $this->_options['maxLength'] = $maxLength; } } }