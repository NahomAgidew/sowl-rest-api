<?php

require '../../vendor/rb/rb.php';
require '../config.php';
require '../models/Scholarship.php';

$scholarship = new Scholarship();
$scholarship->setName('Super College Scholarship');
$scholarship->setAmount('$1,200');
$scholarship->setDeadline('June 30');
$scholarship->setDetail("The SuperCollege Scholarship is our way to give back to help you make college affordable. It's open to all students -- high school, college, grad or adult -- who are currently in college or plan to start. You can use the scholarship to pay for tuition, books, computers, room and board or any education-related expense.");

R::setup('mysql:host='.Config::$host.';dbname='.Config::$dbname, Config::$user, Config::$password);
$s = R::dispense(Config::$s_table);
$s->name = $scholarship.getName();
$s->amount = $scholarship.getAmont();
$s->deadline = $scholarship.getDeadline();
$s->detail = $scholarship.getDetail();
R::store($s);

