<?php
namespace Moto\Database\Scope; use Moto; use Illuminate; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Eloquent\Builder; class SimpleGlobalScope implements Illuminate\Database\Eloquent\Scope { protected $_onApply; protected $_onRemove; public function __construct($onApply = null, $onRemove = null) { $this->_setApplyFunction($onApply); $this->_setRemoveFunction($onRemove); } protected function _setApplyFunction($callback) { if (is_callable($callback)) { $this->_onApply = $callback; return true; } return false; } protected function _setRemoveFunction($callback) { if (is_callable($callback)) { $this->_onRemove = $callback; return true; } return false; } public function apply(Builder $builder, Model $model) { if ($this->_onApply) { call_user_func_array($this->_onApply, [$builder, $model]); } } public function remove(Builder $builder, Model $model) { if ($this->_onRemove) { call_user_func_array($this->_onRemove, [$builder, $model]); } } } 