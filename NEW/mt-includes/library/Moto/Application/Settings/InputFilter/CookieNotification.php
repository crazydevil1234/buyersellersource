<?php
namespace Moto\Application\Settings\InputFilter; use Moto\InputFilter\AbstractInputFilter; class CookieNotification extends AbstractInputFilter { protected $_name = 'settingsWebsite.CookieNotification'; public function init() { $this->add(array( 'name' => 'enabled', 'required' => false, 'validators' => array( array( 'name' => 'InArray', 'options' => array( 'haystack' => array(false, true) ) ), ), )); $this->add(array( 'name' => 'content', 'required' => true, 'continue_if_empty' => true, 'validators' => array( array( 'name' => 'StringLength', 'options' => array( 'encoding' => 'UTF-8', 'min' => 0, 'max' => 2000, ), ), ), )); $controls = new AbstractInputFilter(); $this->add($controls, 'controls'); $controls->add(array( 'name' => 'visible', 'required' => true, 'validators' => array( array( 'name' => 'InArray', 'options' => array( 'haystack' => array('close', 'accept', 'close,accept') ) ), ), )); $accepting = new AbstractInputFilter(); $controls->add($accepting, 'accept'); $accepting->add(array( 'name' => 'label', 'required' => true, 'filters' => array( array('name' => 'StripTags'), array('name' => 'StringTrim'), ), 'validators' => array( array( 'name' => 'StringLength', 'options' => array( 'encoding' => 'UTF-8', 'min' => 1, 'max' => 100, ), ), ), )); $accepting->add(array( 'name' => 'preset', 'required' => true, 'filters' => array( array('name' => 'StripTags'), array('name' => 'StringTrim'), ), 'validators' => array( array( 'name' => 'StringLength', 'options' => array( 'encoding' => 'UTF-8', 'min' => 1, 'max' => 100, ), ), ), )); $accepting->add(array( 'name' => 'size', 'required' => true, 'validators' => array( array( 'name' => 'InArray', 'options' => array( 'haystack' => array('small', 'medium', 'large') ) ), ), )); $accepting->add(array( 'name' => 'cookie_lifetime', 'required' => true, 'filters' => array( array('name' => 'Moto\Filter\IntValue'), ), 'validators' => array( array( 'name' => 'Digits', ), array( 'name' => 'Between', 'options' => array( 'min' => 1, 'max' => 365, ), ), ), )); } } 