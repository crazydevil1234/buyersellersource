<?php
namespace Website\Widgets\Block; use Moto; class Widget extends Moto\System\Widgets\AbstractContainerWidget { protected $_name = 'block'; protected static $_defaultProperties = array( 'anchor' => '', 'stickyEnabled' => false, 'stickyMobile' => false, 'viewportHeight' => false, 'justify' => false, 'styles' => array( 'background-color' => '', ), 'fixed' => false, 'gutter' => false, 'bgFixed' => false, 'bgParallaxed' => false, 'visible_on' => 'mobile-v', 'spacing' => array( 'top' => 'auto', 'right' => 'auto', 'bottom' => 'auto', 'left' => 'auto', ), ); protected $_templateType = 'templates'; protected $_widgetId = true; public $customAttributes = []; public function getCustomAttributes() { return $this->customAttributes; } public function preRender() { parent::preRender(); if ($this->getPropertyValue('stickyEnabled')) { $sticky = []; if ($this->getPropertyValue('stickyMobile')) { $sticky['mobile'] = true; } $this->customAttributes['data-moto-sticky'] = (object) $sticky; } if ($this->getPropertyValue('bgParallaxed')) { $this->customAttributes['data-stellar-background-ratio'] = '0.5'; } } public function getCssClasses() { $result = ''; if ($this->getPropertyValue('fixed', false)) { $result .= ' row-fixed'; } if ($this->getPropertyValue('justify', false)) { $result .= ' moto-justify-content_' . $this->getPropertyValue('justify'); } if ($this->getPropertyValue('styles.background-color', false)) { $result .= ' ' . $this->getCssClassColor($this->getPropertyValue('styles.background-color'), 'moto-bg-'); } if ($this->getPropertyValue('gutter', false)) { $result .= ' moto-enable-side-indents'; } $result .= ' ' . $this->getSpacing('classes'); $result .= ' ' . $this->getVisibleOn('classes'); return $result; } public function getStylesValue() { return $this->getPropertyValue('styles'); } public function _getBackgroundVideoCssClass() { $bgPosition = $this->getPropertyValue('bgPosition', ''); return 'moto-background-video moto-absolute-position' . (!empty($bgPosition) ? ' moto-absolute-position_' . str_replace(' ', '-', $bgPosition) : ''); } } 