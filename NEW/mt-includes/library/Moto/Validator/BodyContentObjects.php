<?php
namespace Moto\Validator; use Moto; class BodyContentObjects extends AbstractValidator { const ERROR_BAD_FORMAT = 'badFormat'; const ERROR_BAD_WIDGET__NOT_OBJECT = 'widgetIsNotObject'; const ERROR_BAD_WIDGET__NO_NAME = 'widgetNameIsEmpty'; const ERROR_BAD_WIDGET__NO_ID = 'widgetIdIsEmpty'; const ERROR_BAD_WIDGET__ID_NO_UNIQUE = 'widgetIdNotUnique'; protected $_invalidWidgets = array(); protected $_widgetsId = array(); protected $_content; protected $_widgets; public function isValid($content, array $context = array()) { $this->_invalidWidgets = array(); $this->_widgetsId = array(); $this->_content = null; $this->_widgets = null; if (is_string($content)) { $content = trim($content); if (empty($content)) { return true; } $content = json_decode($content, true); } if (!is_array($content)) { $this->error(self::ERROR_BAD_FORMAT); return false; } if (!is_array($content['widgets'])) { $this->error(self::ERROR_BAD_FORMAT); return false; } if (!is_array($content['structure'])) { $this->error(self::ERROR_BAD_FORMAT); return false; } $this->_content = $content; $widgets = $content['widgets']; $this->_widgets = $widgets; foreach ($widgets as $widgetId => $widget) { if (!is_array($widget)) { $this->error(self::ERROR_BAD_WIDGET__NOT_OBJECT); return false; } if (empty($widget['name'])) { $this->error(self::ERROR_BAD_WIDGET__NO_NAME); return false; } if (empty($widget['id'])) { $this->error(self::ERROR_BAD_WIDGET__NO_ID); return false; } if ($widgetId !== $widget['id']) { $this->error(self::ERROR_BAD_WIDGET__NO_ID); return false; } if (array_key_exists($widget['id'], $this->_widgetsId)) { $this->error(self::ERROR_BAD_WIDGET__ID_NO_UNIQUE); return false; } $this->_widgetsId[$widget['id']] = true; $this->validateWidget($widget, $context); } return empty($this->_invalidWidgets); } public function validateWidget($content, $context = array()) { $validator = Moto\System\Widgets\Factory::getWidgetValidator($content['name']); if (!$validator) { return true; } $parent = $this->_getIncomingWidgetById($content['parent']); $errors = $validator->errors($content, $parent, $context); if (!empty($errors)) { $this->_invalidWidgets[] = array( 'id' => $content['id'], 'name' => $content['name'], 'errors' => $errors, ); return false; } return true; } protected function _getIncomingWidgetById($id) { if (!array_key_exists($id, $this->_widgets)) { return null; } return $this->_widgets[$id]; } public function getMessages() { return array( '@invalidWidgets' => $this->_invalidWidgets ); } } 