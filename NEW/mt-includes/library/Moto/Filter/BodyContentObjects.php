<?php
namespace Moto\Filter; use Moto; class BodyContentObjects extends AbstractFilter { public function filter($content) { if (is_string($content)) { $content = trim($content); if (empty($content)) { return ''; } $content = json_decode($content, true); } if (!is_array($content)) { return null; } return $content; } } 