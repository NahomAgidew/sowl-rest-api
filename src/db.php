<?php

/**
 * Database connection.
*/
require '../src/config.php';

class DB
{
    public function connect()
    {
        R::setup('mysql:host='.Config::$host.';dbname='.Config::$dbname, Config::$user, Config::$password);
    }
}
