<?php
namespace Moto\ClickAction; use Moto; class Url extends AbstractClickAction { protected $_defaultData = array( 'url' => null, 'target' => '_self', 'nofollow' => 0, ); public function getUrl() { return trim($this->get('url')); } }