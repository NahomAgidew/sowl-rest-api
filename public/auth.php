<?php

/**
 * Handles OAuth 2.0
*/

require '../vendor/autoload.php';
require '../src/config_auth.php';

$dsn = 'mysql:dbname='.ConfigAuth::$dbname.';host='.ConfigAuth::$host;
$username = ConfigAuth::$user;
$password = ConfigAuth::$password;

OAuth2\Autoloader::register();
$storage = new OAuth2\Storage\Pdo(array('dsn' => $dsn, 'username' => $username, 'password' => $password));
$server = new OAuth2\Server($storage);
$server->addGrantType(new OAuth2\GrantType\ClientCredentials($storage));
$server->addGrantType(new OAuth2\GrantType\AuthorizationCode($storage));

// Handle a request for an OAuth2.0 Access Token and send the response to the client
$server->handleTokenRequest(OAuth2\Request::createFromGlobals())->send();
