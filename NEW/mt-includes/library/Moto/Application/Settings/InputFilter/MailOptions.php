<?php
namespace Moto\Application\Settings\InputFilter; use Moto\InputFilter\AbstractInputFilter; use Moto; class MailOptions extends AbstractInputFilter { protected $_name = 'settingsWebsite.mailOptions'; public function init() { $this->add(array( 'name' => 'fromEmail', 'required' => false, 'allow_empty' => true, 'filters' => array( array('name' => 'StripTags'), array('name' => 'StringTrim'), ), 'continue_if_empty' => true, 'validators' => array( array( 'name' => 'EmailAddress', 'options' => array( 'useMxCheck' => false, 'useDeepMxCheck' => false, 'useDomainCheck' => false, ), ), array( 'name' => 'StringLength', 'options' => array( 'encoding' => 'UTF-8', 'min' => 0, 'max' => 100, ), ), ), )); $this->add(new MailTransport(), 'transport'); } } 