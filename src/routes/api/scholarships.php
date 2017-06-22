<?php

require '../src/config.php';

R::setup('mysql:host='.Config::$host.';dbname='.Config::$dbname, Config::$user, Config::$password);

$app = new \Slim\App;

$app->get('/api/scholarships', function($req, $res, $args) {
    $data = json_encode(R::getAll("SELECT * FROM scholarships"));
    return $res->write($data);
});

$app->get('/api/scholarships/{id}', function($req, $res, $args) {
    $data = json_encode(R::load('scholarships', $args['id']));
    return $res->write($data);
});


