<?php

$app = new \Slim\App;

function getAllScholarships() {
    return json_encode(R::getAll("SELECT * FROM ".Config::$s_table));
}

function getScholarship($id) {
    return json_encode(R::load(Config::$s_table, $id));
}

$app->get('/api/scholarships', function($req, $res, $args) {
    $data = getAllScholarships();
    return $res->write($data);
});

$app->get('/api/scholarships/{id}', function($req, $res, $args) {
    $data = getScholarship($args['id']);
    return $res->write($data);
});


