<?php
namespace Website\Widgets\Slider; use Moto; class Widget extends Moto\System\Widgets\AbstractWidget { protected $_name = 'slider'; protected static $_defaultProperties = array( 'preset' => 'default', 'animation' => '', 'spacing' => array( 'top' => 'auto', 'right' => 'auto', 'bottom' => 'auto', 'left' => 'auto', ), 'items' => array(), 'slideshowEnabled' => true, 'slideshowDelay' => 5, 'slideshowAnimationType' => 'fade', 'showNextPrev' => true, 'showPaginationDots' => true, 'showSlideCaptions' => true, 'showSlideCaptionsOn' => 'mobile-v', ); protected $_templateType = 'templates'; protected $_widgetId = true; public function exportFrontendSettings() { $props = $this->getProperties(array( 'slideshowEnabled', 'slideshowDelay', 'slideshowAnimationType', 'showNextPrev', 'showPaginationDots', 'showSlideCaptions', )); $props['itemsCount'] = count($this->getPropertyValue('items', array())); return json_encode($props); } public function getCaptionsVisibleOnClass() { return Moto\System\Widgets\Helper::getCssClassesVisibleOn($this->getPropertyValue('showSlideCaptionsOn')); } } 