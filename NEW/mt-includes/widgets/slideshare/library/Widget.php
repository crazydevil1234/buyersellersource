<?php
namespace Website\Widgets\Slideshare; use Moto; class Widget extends Moto\System\Widgets\AbstractWidget { protected $_name = 'slideshare'; protected static $_defaultProperties = array( 'spacing' => array( 'top' => 'auto', 'right' => 'auto', 'bottom' => 'auto', 'left' => 'auto', ), 'params' => array( 'url' => '', 'src' => '', 'presentationRatio' => 75, ), ); protected $_templateType = 'templates'; protected $_widgetId = true; } 