<?php
namespace Moto\Filter; class DefaultFilter extends AbstractFilter { protected $_options = array( 'value' => 0 ); public function filter($value) { return empty($value) ? $this->_options['value'] : $value; } } 