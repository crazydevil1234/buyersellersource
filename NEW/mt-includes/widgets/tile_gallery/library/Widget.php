<?php
namespace Website\Widgets\TileGallery; use Moto; class Widget extends Moto\System\Widgets\AbstractWidget { protected $_name = 'tile_gallery'; protected static $_defaultProperties = array( 'items' => array(), 'preset' => 'default', 'animation' => '', 'showCaptionsOn' => 'mobile-v', 'justifyHeight' => true, 'showCounter' => true, 'styles' => array( 'itemsWrapper' => array( 'desktop' => array( 'base' => array( 'column-gap' => '30px', 'column-count' => '4' ), ), 'tablet' => array( 'base' => array( 'column-gap' => '', 'column-count' => '' ), ), 'mobile-v' => array( 'base' => array( 'column-gap' => '', 'column-count' => '' ), ), 'mobile-h' => array( 'base' => array( 'column-gap' => '', 'column-count' => '' ), ) ), 'itemWrapper' => array( 'desktop' => array( 'base' => array( 'padding-bottom' => '30px' ), ), 'tablet' => array( 'base' => array( 'padding-bottom' => '' ), ), 'mobile-v' => array( 'base' => array( 'padding-bottom' => '' ), ), 'mobile-h' => array( 'base' => array( 'padding-bottom' => '' ), ) ), ), 'spacing' => array( 'top' => 'auto', 'right' => 'auto', 'bottom' => 'auto', 'left' => 'auto', ), ); protected $_templateType = 'templates'; protected $_widgetId = true; public function getCaptionsVisibleOnClass() { return Moto\System\Widgets\Helper::getCssClassesVisibleOn($this->getPropertyValue('showCaptionsOn')); } } 