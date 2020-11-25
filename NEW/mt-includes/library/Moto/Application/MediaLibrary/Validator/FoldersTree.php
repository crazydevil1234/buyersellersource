<?php
namespace Moto\Application\MediaLibrary\Validator; use Moto\Validator\AbstractValidator; use Moto\Application\MediaLibrary\InputFilter; use Moto; class FoldersTree extends AbstractValidator { const ERROR_BAD_STRUCTURE = 'badStructure'; protected $messageTemplates = array( self::ERROR_BAD_STRUCTURE => 'Tree is not valid', ); protected $_errors = array(); public function isValid($items, array $context = array()) { $this->_context = $context; if (!is_array($items)) { $this->error(self::ERROR_BAD_STRUCTURE); return false; } if (empty($items)) { return true; } $inputFilter = new InputFilter\FoldersTreeItem(); foreach($items as $i => $item) { $inputFilter->setData($item); $isValid = $inputFilter->isValid(); if (!$isValid) { $this->_errors[$i] = $inputFilter->getMessages(); continue; } } $isValid = empty($this->_errors); return $isValid; } public function getMessages() { return $this->_errors; } }