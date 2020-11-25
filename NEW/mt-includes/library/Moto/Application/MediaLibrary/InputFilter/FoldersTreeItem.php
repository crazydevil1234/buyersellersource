<?php
namespace Moto\Application\MediaLibrary\InputFilter; use Moto; class FoldersTreeItem extends NewFolder { protected $_name = 'mediaLibraryFolder.move'; public function init() { $this->add(array( 'name' => 'id', 'required' => true, 'filters' => array( array('name' => 'StripTags'), array('name' => 'StringTrim'), ), 'validators' => array( array( "name" => "Digits", 'break_chain_on_failure' => true, ), array( 'name' => 'Db\RecordExists', 'options' => array( 'table' => Moto\Config::get('database.prefix') . 'media_folders', 'field' => 'id', 'adapter' => Moto\Config::get('databaseAdapter'), ) ) ), )); parent::init(); $this->remove('name'); } } 