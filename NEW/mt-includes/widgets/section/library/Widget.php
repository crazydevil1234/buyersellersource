<?php
namespace Website\Widgets\Section; use Moto; class Widget extends Moto\System\Widgets\AbstractContainerWidget { protected $_name = 'section'; protected static $_defaultProperties = array(); protected $_templateType = 'templates'; protected $_widgetId = true; public function __construct($content) { $this->_widgetId = Moto\Util::getFrom($content, 'id', true); parent::__construct($content); } public function _exportDataAfter($data) { return $data; } } 