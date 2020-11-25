<?php
namespace Moto\Authentication; use Moto; use Zend\Crypt\Password\Bcrypt; use Zend\Math\Rand; class Security { static protected $_options = array( 'engine' => 'Bcrypt', 'cost' => 4 ); public static function generateSalt($len = 32) { $salt = Rand::getString($len, null, true); return $salt; } public static function hashPassword($password, $salt) { $bcrypt = new Bcrypt(); $bcrypt->setCost(self::$_options['cost']); $bcrypt->setSalt($salt); return $bcrypt->create($password); } public static function verify($password, $hash, $salt = null) { $bcrypt = new Bcrypt(); $bcrypt->setCost(self::$_options['cost']); return $bcrypt->verify($password, $hash); } public static function generateCookieTokenSignature($user, $expiration, $scheme = 'auth') { if (!is_object($user) || empty($user->password) || empty($user->email)) { return null; } $passKey = substr($user->password, 8, 4) . substr($user->password, -12); $hashOne = hash_hmac('md5', $user->email . $passKey . '-' . $expiration, $scheme); $signature = hash_hmac('md5', $user->email . '|' . $expiration, $hashOne); return $signature; } public static function parseToken($token, $delimiter = '-') { $result = array( 'userId' => 0, 'expiration' => 0, 'signature' => '', 'isValid' => false, 'isExpired' => true, ); if (preg_match('/^([0-9]+)' . $delimiter . '([0-9]+)' . $delimiter . '([a-f0-9]+)$/', $token, $match)) { $result['userId'] = $match[1]; $result['expiration'] = $match[2]; $result['signature'] = $match[3]; $result['isValid'] = true; } $result['isExpired'] = ($result['expiration'] < time()); $result['isValid'] &= !$result['isExpired']; return $result; } public static function checkTokenSignature($user, array $tokenInfo, $scheme = 'auth') { $signature = self::generateCookieTokenSignature($user, $tokenInfo['expiration'], $scheme); return ($signature === $tokenInfo['signature']); } } 