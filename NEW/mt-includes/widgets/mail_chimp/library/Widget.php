<?php
namespace Website\Widgets\MailChimp; use Moto; class Widget extends Moto\System\Widgets\AbstractWidget { protected $_name = 'mail_chimp'; protected static $_defaultProperties = array( 'preset' => 'default', 'listId' => '', 'animation' => '', 'align' => array( 'desktop' => 'left', 'tablet' => '', 'mobile-v' => '', 'mobile-h' => '', ), 'spacing' => array( 'top' => 'auto', 'right' => 'auto', 'bottom' => 'auto', 'left' => 'auto', ), 'fields' => array( 'email' => array( 'enabled' => true, 'required' => true, 'type' => 'email' ), ), 'messages' => array(), 'buttons' => array( 'submit' => array( 'preset' => 'default', 'size' => 'medium', 'align' => 'left' ), ), 'postAction' => array( 'action' => 'none', 'properties' => array( 'id' => '', 'target' => '_self', ), ), 'subscriptionConfirmation' => false, 'resetAfterSubmission' => false, ); protected $_templateType = 'templates'; protected $_widgetId = true; public function getActionAfterSubmission() { $clickAction = Moto\ClickAction\Factory::create($this->properties['postAction']); $data = $clickAction->toArray(['url', 'target']); $data['id'] = Moto\Util::getValue($data, 'properties.id'); return json_encode(Moto\Util::arrayOnly($data, ['action', 'url', 'target', 'id'])); } public function getStatusDefaultValue() { if ($this->getPropertyValue('subscriptionConfirmation')) { return 'pending'; } return 'subscribed'; } } 