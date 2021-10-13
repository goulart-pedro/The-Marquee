<?php

class Router
{
    private $database;
    private $pages = [];
    private $pageID;
    public function __construct($serverRoot, $database)
    {
        $this->database = $database;
        $this->pageID = $_GET['page'] ?? 'home';
	    $this->pages['admin'] =  'pages/edit.php';
        $this->pages['login'] =  'pages/login.php';
        $this->pages['filmes'] =  'pages/films.php';
        $this->pages['movie'] =  'pages/movie.php';
        $this->pages['home']  =  'pages/home.php';
    }

    /*
     * public function routeGet($pageID) {
        return $serverRoot.$this->pages[$pageID];
     }
     */

    public function getPage()
    {
        if($this->pageID == 'movie') {
            $this->handleMovie();
        }

        include $this->pages[$this->pageID];
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
