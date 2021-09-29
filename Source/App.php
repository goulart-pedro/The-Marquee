<?php
include('dbhost.php');
include(APP_ROOT.'/Source/Database.php');
include(APP_ROOT.'/Source/Router.php');


class App {
	public $router;
	public $database;

	public function __construct() {
	    $this->database = new Database('127.0.0.1:3306', '', '');
	    $this->router = new Router(APP_ROOT, $database);
	}
}
