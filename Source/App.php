<?php
include('./environment.php');
include_once(APP_ROOT.'/Source/Database.php');
include_once(APP_ROOT.'/Source/Router.php');

class App {
	function __construct()
	{
		$this->database = new Database($_ENV['DATABASE_NAME'], $_ENV['DATABASE_HOST'], $_ENV['DATABASE_USR'], $_ENV['DATABASE_PWD']);
		$this->router = new Router($this->database);	
	}

}