<?php


class PageLoader
{
    private $database;
    private $pages = [];
    private $pageID;
    public function __construct()
    {
        $this->database = new Database;

        $this->pageID = $_GET['page'] ?? 'home';

        $this->pages['admin'] =  'pages/edit.php';
        $this->pages['login'] =  'pages/login.php';
        $this->pages['films'] =  'pages/login.php';
    }

    public function getPage()
    {
        if (isset($this->pages[$this->pageID])) include $this->pages[$this->pageID];
        else echo $this->database->getPages($this->pageID)['content'];
    }
}
