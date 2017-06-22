<?php

R::setup('mysql:host='.Config::$host.';dbname='.Config::$dbname, Config::$user, Config::$password);

return function () : Generator {
    /** Test getAllScholarships() */
    yield function () {
        assert(!is_null(getAllScholarships()));
    };
    /** Test getScholarship() */
    yield function () {
        assert(!is_null(getScholarship(1)));
    };
};
