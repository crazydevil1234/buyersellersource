<?php
namespace Moto\Filter; use Moto; class FloatValue extends AbstractFilter { public function filter($value) { if (!is_scalar($value)) { return $value; } return (float) $value; } } 