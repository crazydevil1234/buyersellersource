<?php
namespace Website\Widgets\Blog; use Moto; class AbstractPostsWidget extends Moto\System\Widgets\AbstractWidget { protected static $_table = null; protected $_firstName; protected $_secondName; protected $_cssClassPrefix = 'moto-'; protected $_cssClasses = array( 'post' => 'moto-blog-post', 'pagination' => 'moto-pagination', 'paginator' => 'moto-paginator-item', ':first' => '_first', ':last' => '_last', ':even' => '_even', ':odd' => '_odd', ':current' => '_current', ':active' => '_active', ); protected $_design = false; protected $_widgetId = true; public function init() { parent::init(); $this->_firstName = $this->_secondName = $this->_name; if (preg_match('/^([^\.]+)\.(.*)$/', $this->_name, $match)) { $this->_firstName = $match[1]; $this->_secondName = $match[2]; } } public function getFirstName() { return $this->_firstName; } public function getSecondName() { return $this->_secondName; } protected function _getCssClass($name, $default = null) { if (array_key_exists($name, $this->_cssClasses)) { return $this->_cssClasses[$name]; } if (null == $default) { return $this->_cssClassPrefix . str_replace('.', '-', $name); } return $default; } protected function _getTable() { if (null == static::$_table) { static::$_table = new Moto\Application\Pages\PagesTable(); static::$_table->useResultAsModel(true); } return static::$_table; } protected function _getLoopClassModificator($loop, $class = array()) { if (!empty($loop['first']) && $loop['first']) { $class[] = $this->_getCssClass(':first'); } if (!empty($loop['last']) && $loop['last']) { $class[] = $this->_getCssClass(':last'); } if (!empty($loop['index'])) { if ($loop['index'] % 2 == 0) { $class[] = $this->_getCssClass(':even'); } else { $class[] = $this->_getCssClass(':odd'); } } return $class; } public function getPostArticleClass($loop, $prefix = 'moto-blog-post') { $class = $this->_getLoopClassModificator($loop, array('')); $class = $prefix . implode(' ' . $prefix, $class); return $class; } public function getDateFormat() { $settings = Moto\Website\Settings::get('content_section_blog'); return Moto\Util::getFrom($settings, 'date_format', 'Y-m-d'); } public function design($key = null, $default = '') { if ($this->_design === false) { $settings = Moto\Website\Settings::get('content_section_blog'); $this->_design = Moto\Util::getFromObjectDeep($settings, 'design.' . $this->getSecondName()); } if (empty($key)) { return $default; return (empty($this->_design) ? $default : $this->_design); } $result = null; if (empty($result)) { $result = trim(Moto\Util::getFromObjectDeep($this->_design, $key, null)); } if (empty($result)) { $result = trim(Moto\Util::getFromObjectDeep(Moto\Website\Settings::get('content_section_blog'), 'design.' . $key, null)); } return (empty($result) ? $default : $result); } public function getDesignOption($key = null, $default = '') { if ($this->existsPropertyValue('version')) { return $this->getPropertyValue('style.' . $key, $default); } $styleObject = Moto\Website\Settings::get('content_section_blog'); $stylePath = 'design.' . $this->getSecondName() . '.' . $key; return Moto\Util::getValue($styleObject, $stylePath, $default); } } 