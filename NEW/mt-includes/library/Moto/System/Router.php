<?php
namespace Moto\System; use Moto; use Zend; class Router { const DEFAULT_PRIORITY = 50; protected static $_instance = array(); protected $_defaultRoute = array( 'path' => null, 'value' => null, 'priority' => 10, 'regexp' => null, 'method' => '*' ); protected $_queue; protected $_options = array( 'returnMatch' => false, ); protected $_uriPrefix = ''; public static function getInstance($name = 'system') { if (!isset(static::$_instance[$name])) { static::$_instance[$name] = new static(); } return static::$_instance[$name]; } public function __construct($prefix = '') { $this->_setPrefixedPath($prefix); $this->_initQueue(); } protected function _initQueue($reInit = false) { if ($reInit) { $this->_queue = null; } if ($this->_queue === null) { $this->_queue = new Zend\Stdlib\SplPriorityQueue(); $this->_queue->setExtractFlags(Zend\Stdlib\SplPriorityQueue::EXTR_DATA); } } public function dropQueue() { $this->_initQueue(true); } public function getOption($name, $default = null) { return (array_key_exists($name, $this->_options) ? $this->_options[$name] : $default); } public function setOption($name, $value) { $this->_options[$name] = $value; return $this; } protected function _setPrefixedPath($prefix) { $prefix = (string) $prefix; $prefix = trim($prefix, '/'); if ($prefix !== '') { $this->_uriPrefix = '/' . $prefix; } } protected function _getPrefixedPath($path) { if ($this->_uriPrefix !== '') { $path = $this->_uriPrefix . '/' . ltrim($path, '/'); } return $path; } public function addPath($path, $value, $priority = null, $options = array()) { if (null == $priority) { $priority = static::DEFAULT_PRIORITY; } if (is_array($path)) { foreach ($path as $item) { $this->addPath($item, $value, $priority); } return $this; } if (empty($path)) { $path = '*'; } $path = $this->_getPrefixedPath($path); $regexp = null; if (Moto\Util::getFrom($options, 'wildcard', true)) { $regexp = $this->convertPathToRegexp($path, $options); } $this->_add(array( 'path' => $path, 'regexp' => $regexp, 'value' => $value, 'priority' => $priority, 'options' => $options, )); return $this; } public function addRoute($regexp, $value, $priority = 10) { if (is_array($regexp)) { foreach ($regexp as $item) { $this->addRoute($item, $value, $priority); } return $this; } $this->_add(array( 'regexp' => $regexp, 'value' => $value, 'priority' => $priority, )); return $this; } protected function _add(array $route) { $route = array_merge($this->_defaultRoute, $route); if (empty($route['regexp'])) { $route['regexp'] = $this->convertPathToRegexp($route['path']); } if (empty($route['regexp'])) { return false; } $this->_queue->insert($route, $route['priority']); return true; } public function convertPathToRegexp($path, $options = array()) { $path = trim($path); if (empty($path)) { $path = '/'; } $regexp = '^' . $path . ($path[strlen($path) - 1] === '/' ? '?' : '/?'); $regexp = preg_replace('/\/\(/', '/(?:', $regexp); $regexp = preg_replace('/([\/\.])/', '$1', $regexp); if (Moto\Util::getFrom($options, 'wildcard', true)) { $regexp = str_replace('*', '(.*)', $regexp); } else { $regexp = str_replace('*', '\*', $regexp); } $regexp = str_replace('/', '\/', $regexp); $regexp .= '$'; $regexp = '/' . $regexp . '/'; if (!Moto\Util::getFrom($options, 'case_sensitive', true)) { $regexp .= 'i'; } return $regexp; } public function findAll($url) { $result = $this->find($url); return $result; } public function findOne($url, $default = null) { $result = $this->find($url, 1); $result = (empty($result) ? $default : $result[0]); return $result; } public function find($url, $limit = 0) { $limit = (int)$limit; if ($limit < 0) { $limit = 0; } $result = array(); $url = trim((string)$url); if (empty($url) || $url[0] != '/') { $url = '/' . $url; } if ($this->_queue->isEmpty()) { return $result; } $queue = clone $this->_queue; $queue->top(); while ($queue->valid()) { $step = $queue->current(); $matched = false; $match = array(); $options = Moto\Util::getFrom($step, 'options', array()); if (Moto\Util::getFrom($options, 'wildcard', true)) { if (!array_key_exists('regexp', $step)) { continue; } $regexp = $step['regexp']; $matched = (preg_match($regexp, $url, $match)); } else { $matched = ($url == $step['path']); } if ($matched) { $this->_processMatchedRoute($step, $match, $result); if ($limit > 0 && count($result) == $limit) { break; } } $queue->next(); } return $result; } protected function _processMatchedRoute($route, $match, &$result) { if (empty($route['value'])) { return false; } $value = $route['value']; if ($this->getOption('returnMatch') && is_array($value)) { $value['_match'] = $match; $value['_route'] = $route; } $result[] = $value; return true; } protected function _processMatchedRouteCallable($url, $route, &$result) { if (empty($route['value'])) { return false; } if ($this->_isCallable($route['value'])) { $name = $this->_callClosure($route['value'], $url, $result); if (is_string($name)) { $result[] = $name; } else { return false; } } else { $result[] = $route['value']; } return true; } protected function _isCallable($value) { return is_callable($value); } protected function _callClosure($closure, $url, &$result) { return call_user_func($closure, $url, $result); } }