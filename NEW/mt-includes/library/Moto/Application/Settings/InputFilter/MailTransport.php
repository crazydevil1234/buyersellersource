<?php
namespace Moto\Application\Settings\InputFilter; use Moto\InputFilter\AbstractInputFilter; use Moto; class MailTransport extends AbstractInputFilter { protected $_name = 'settingsWebsite.mailTransport'; public function init() { $this->add(array( 'name' => 'class', 'required' => true, 'allow_empty' => true, 'filters' => array( array('name' => 'StripTags'), array('name' => 'StringTrim'), ), 'continue_if_empty' => true, 'validators' => array( array( 'name' => 'InArray', 'options' => array( 'haystack' => array('', 'none', 'Sendmail', 'Smtp', 'File') ) ), ), )); $this->add(new MailClassParameters(), 'parameters'); } public function getValues($keys = null, $ignoreDefault = false) { $values = parent::getValues($keys, $ignoreDefault); if ($values['class'] === 'Sendmail') { unset($values['parameters']); } return $values; } } 