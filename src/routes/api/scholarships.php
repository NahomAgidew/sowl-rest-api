<?php

$access_granted = false;
$app = new \Slim\App;

require 'auth.php';

// Handle a request to a resource and authenticate the access token
if (!$server->verifyResourceRequest(OAuth2\Request::createFromGlobals())) {
    $server->getResponse()->send();
    $access_granted = false;
    header("Location: failed.php");
}

$access_granted = true;
//json_encode(array('success' => true, 'message' => 'You have access to the API!'));

function getAllScholarships()
{
    return access_granted ? json_encode(R::getAll("SELECT * FROM ".Config::$s_table)) : 'Access Denied';
}

function getScholarship($id)
{
    return access_granted ? json_encode(R::load(Config::$s_table, $id)) : 'Access Denied';
}

$app->get('/api/scholarships', function ($req, $res, $args) {
    $data = getAllScholarships();
    return $res->write($data);
});

$app->get('/api/scholarships/{id}', function ($req, $res, $args) {
    $data = getScholarship($args['id']);
    return $res->write($data);
});
