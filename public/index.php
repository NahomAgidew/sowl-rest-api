<?php

require '../vendor/autoload.php';
require '../vendor/rb/rb.php';

$app = new \Slim\App;

require '../src/routes/api/scholarships.php';

$app->run();
