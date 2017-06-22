<?php

require './vendor/autoload.php';
require './vendor/rb/rb.php';
require './src/config.php';
require './src/routes/api/scholarships.php';

return function () : Generator {
    /** Test $host */
    yield function () {
        assert(!is_null(Config::$host));
    };

    /** Test $dbname */
    yield function () {
        assert(!is_null(Config::$dbname));
    };

    /** Test $user */
    yield function () {
        assert(!is_null(Config::$user));
    };

    /** Test $password */
    yield function () {
        assert(!is_null(Config::$password));
    };
};
