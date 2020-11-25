<?php
namespace Moto\Filter; use Moto; class StringValue extends AbstractFilter { public function filter($value) { return (string) $value; } } 