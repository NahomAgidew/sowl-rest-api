<?php

/**
 * Entry point.
*/

require '../vendor/autoload.php';
require '../vendor/rb/rb.php';
require '../src/db.php';

$app = new \Slim\App;

/**
 * connect to DB
*/
$db = new DB();
$db->connect();

/**
 * Add more routes here.
*/
require '../src/routes/api/scholarships.php';

$app->run();
