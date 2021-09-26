<?php
require_once('../dbhost.php');
require_once('../Source/Database.php');
$database = new Database($host, $dbusr, $dbpwd);
require_once("./api.callbacks.php");

// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");

//echo routeRequest($_GET['page']);
