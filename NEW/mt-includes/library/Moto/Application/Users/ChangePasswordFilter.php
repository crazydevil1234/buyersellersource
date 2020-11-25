<?php
namespace Moto\Application\Users; use Moto\Application\Profile; use Moto; class ChangePasswordFilter extends Profile\ChangePasswordFilter { protected $_name = 'users.change:password'; public function init() { parent::init(); $this->remove('old_password'); $this->add(array( 'name' => 'id', 'required' => true, 'filters' => array( array('name' => 'StripTags'), array('name' => 'StringTrim'), ), 'validators' => array( array( 'name' => 'Digits', 'break_chain_on_failure' => true ), array( 'name' => 'Db\RecordExists', 'options' => array( 'table' => Moto\Config::get('database.prefix') . 'users', 'field' => 'id', 'adapter' => Moto\Config::get('databaseAdapter') ) ) ), )); } }