<?php
namespace Moto\Application\Content\InputFilter; class SaveBody extends SaveContentBlock { protected $_name = 'content.save:body'; public function init() { parent::init(); $this->remove('id'); $this->remove('name'); $this->remove('type'); } } 