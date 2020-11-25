<?php
defined('MOTO_ENGINE') or die;
define('MOTO_INSTALLED', true);

if (!isset($config))
    $config = array();

/* USER_SETTINGS:START */
$config["database"]["hostname"] = base64_decode('bG9jYWxob3N0');
$config["database"]["username"] = base64_decode('YnV5ZXJzZWxfNjc5Njc=');
$config["database"]["database"] = base64_decode('YnV5ZXJzZWxfNjc5Njc=');
$config["database"]["password"] = base64_decode('cjY7RGo0SytmbSxk');
$config["database"]["prefix"] = base64_decode('');

/* USER_SETTINGS:END */

return $config;
