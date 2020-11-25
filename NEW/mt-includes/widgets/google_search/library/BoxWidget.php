<?php
namespace Website\Widgets\GoogleSearch; use Moto; class BoxWidget extends Moto\System\Widgets\AbstractWidget { protected $_name = 'google_search.box'; protected static $_defaultProperties = array( 'placeholder' => 'Search', 'buttons' => [ 'search' => [ 'label' => 'Search', 'preset' => 'default', 'size' => 'medium' ] ], 'icon' => [ 'id' => 'search', 'provider' => 'FontAwesome', 'unicode' => 'f002' ], 'spaceBetweenControls' => 'small', 'spacing' => [ 'top' => 'auto', 'right' => 'auto', 'bottom' => 'auto', 'left' => 'auto' ], 'openResults' => [ 'action' => 'page', 'properties' => [ 'target' => '_self' ] ], 'visible_on' => 'mobile-v', 'preset' => 'default', 'animation' => '' ); protected $_templateType = 'templates'; public function getTemplatePath($preset = null) { return '@websiteWidgets/google_search/templates/box.twig.html'; } public function getCurrentQuery() { return Moto\System\Request::getPost('searchQuery'); } protected $_widgetId = true; } 