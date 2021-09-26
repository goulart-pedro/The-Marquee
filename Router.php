<?php

class Router
{
    private $database;
    private $pages = [];
    private $pageID;
    public function __construct()
    {
	// variaveis de producao
	include(APP_ROOT."/dbhost.php");
	
        $this->database = new Database($host, $dbusr, $dbpwd);

        $this->pageID = $_GET['page'] ?? 'home';

        $this->pages['admin'] =  'pages/edit.php';
        $this->pages['login'] =  'pages/login.php';
        $this->pages['filmes'] =  'pages/films.php';
        $this->pages['movie'] =  'pages/movie.php';
        $this->pages['home']  =  'pages/home.php';
    }

    public function getPage()
    {
        $pageIsOnCLass = isset($this->pages[$this->pageID]);

        if ($pageIsOnCLass)
        {
            if($_GET['page'] == 'movie') {
                $this->handleMovie();
            }

            include $this->pages[$this->pageID];
        }
        else echo $this->database->getPages($this->pageID)['content'];
    }

    private function handleMovie() 
    {
        $currMovie = $this->database->getMovie($_GET['id']);
        $images = $this->database->getImages($_GET['id']);
        $related = $this->database->getRelated($_GET['id']);
        include $this->pages[$this->pageID];
        return true;

    }
}
