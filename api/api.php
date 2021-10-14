<?php
require_once('../environment.php');
require_once('../Source/Database.php');
$database = new Database($_ENV['DATABASE_NAME'], $_ENV['DATABASE_HOST'], $_ENV['DATABASE_USR'], $_ENV['DATABASE_PWD']);
require_once("./api.callbacks.php");

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");