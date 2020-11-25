<?php
namespace Website\Widgets\FormElements; use Moto; class CheckboxWidget extends AbstractFormInputWidget { protected $_name = 'form_elements.checkbox'; protected static $_defaultProperties = array( 'name' => '', 'label' => 'Checkbox', 'labelType' => 'text', 'checked' => false, 'validation' => array( 'required' => false ), 'align' => array( 'desktop' => 'left', 'tablet' => '', 'mobile-v' => '', 'mobile-h' => '', ), 'spacing' => array( 'top' => 'auto', 'right' => 'auto', 'bottom' => 'small', 'left' => 'auto', ), ); public function getTemplatePath($preset = null) { return '@websiteWidgets/form_elements/templates/checkbox.twig.html'; } public function setFieldValue($value) { $this->_fieldValue = Moto\Util::decodeValue($value, 'boolean'); } public function getFieldValue() { if ($this->_fieldValue) { return $this->getPropertyValue('values.checked', 'Yes'); } return $this->getPropertyValue('values.unchecked', 'No'); } } 