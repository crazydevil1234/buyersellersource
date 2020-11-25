<?php
namespace Moto\Application\Settings\InputFilter; use Moto\InputFilter\AbstractInputFilter; use Zend\InputFilter\Exception; class MaintenanceMode extends AbstractInputFilter { protected $_name = 'settingsWebsite.MaintenanceMode'; public function init() { $this->add(array( 'name' => 'message', 'required' => false, 'filters' => array( array('name' => 'StripTags'), array('name' => 'StringTrim'), ), 'validators' => array( array( 'name' => 'StringLength', 'options' => array( 'encoding' => 'UTF-8', 'min' => 1, 'max' => 512, ), ), ), )); } public function setData($data) { if (is_string($data)) { $data = json_decode($data, true); } return parent::setData($data); } } 