<?php
namespace Moto\Application\Content\Validator; use Zend\Db\Sql\Select; use Zend\Validator\Db\NoRecordExists; class UniqueName extends NoRecordExists { protected $_type = null; protected $_context = null; function __construct($options = null) { parent::__construct($options); if (array_key_exists('type', $options)) { $this->setType($options['type']); } } function setType($type) { $this->_type = $type; return $this; } public function isValid($value, array $context = array()) { $this->_context = $context; $this->setExclude(array( 'field' => 'id', 'value' => isset($context['id']) ? $context['id'] : 0 )); if (is_null($this->_type) && array_key_exists('type', $this->_context)) { $this->setType($this->_context['type']); } return parent::isValid($value); } public function getSelect() { $select = parent::getSelect(); $select->where->equalTo('type', $this->_type); return $select; } }