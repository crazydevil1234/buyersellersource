<?php
namespace Moto\Application\Roles; use Moto\Application\Model; use Moto\Application\Model\AbstractModel; class RoleModel extends AbstractModel { const GUEST_ID = 1; const USER_ID = 2; const ROOT_ID = 3; const AUTHOR_ID = 4; const EDITOR_ID = 5; const ADMIN_ID = 6; public $id = null; public $name = 0; public $del = 0; protected $_fields = array( 'id' => array(), 'name' => array(), 'del' => array(), ); public function __construct() { parent::__construct(); $this->created = date('Y-m-d H:i:s'); } }