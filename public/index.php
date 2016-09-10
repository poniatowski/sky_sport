<?php

define("CONFIG", "./../config/");
// include config file
include_once(CONFIG . "config.ini.php");
// if production mode hide all errors
if(PRODUCTION_MODE) error_reporting(0);

// set up basic routes for app
if(!empty($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] !== '/') {
    $len = strlen($_SERVER['REQUEST_URI']);
    $req = substr($_SERVER['REQUEST_URI'], 1, $len);
    switch ($req) {
        case 'index':
        case 'bill':
        case '':
            include_once(CONTROLLER . "BaseController.php");
            $controller = new BaseController();
            $page = './app';
            $baseURL = $controller->baseUrl;
            include_once($controller->layout);
            break;
        case 'api/bill/show':
            include_once(CONTROLLER . "BillController.php");
            $controller = new BillController();
            $controller->getBillDetails();
            break;
        case 'page':
            break;
        default:
            break;
    }
} else {
    include_once(CONTROLLER . "BillController.php");
    $controller = new BillController();
    $controller->getBillDetails();
}





