<?php

session_start();
session_regenerate_id(true);

// main path
define("DIR", __DIR__);
define("DOT", "/./");
define("DOT_UP", DOT . "/../");
// main app
define("APP", DOT . "../app/");
define("PUBLIC", "./../public/");
define("PRODUCTION_MODE", false);
define("SALT", "0987654321!@#$%^&*()_+qwertyuiop[[]");
define("DATE_NOW", date("Y-m-d"));

// back-end
define("CONTROLLER", APP."controller/");
define("LIB", "lib/");
define("MODEL", APP."model/");
define("VIEW", APP."view/");