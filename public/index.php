<?php
define("CONFIG", "./../config/");

// include config file
include_once(CONFIG . "config.ini.php");

// if production mode hide all errors
if(PRODUCTION_MODE) error_reporting(0);


$pRouter = new \Helpers\Router();
$pRouter->map('GET', '/', 'BillController@getBillDetails', 'Home');
$pRouter->map('GET', '/api/bill/show', 'BillController@getBillDetails', 'Source');
$pRouter->map('GET', '/bill', 'BillController@main_view', 'Bill');

$pRouter->match();