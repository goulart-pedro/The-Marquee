<?php

class Database
{
    private $conn;

    public function __construct()
    {
        $this->conn = new PDO('mysql:host=localhost;dbname=themarquee;charset=utf8', 'debian-sys-maint', 'IysiL7gVkjBOqBt8');
        $this->getPages();
    }


    public function getPages($pageName = null): array
    {
        if ($pageName !== null) {
            $page = $this->conn->prepare('SELECT * FROM pages WHERE `name` = :n');
            $page->bindParam(':n', $pageName);
            $page->execute();
            return $page->fetch(PDO::FETCH_ASSOC);
        }

        $pages = $this->conn->prepare('SELECT * FROM pages');
        $pages->execute();
        return $pages->fetchAll(PDO::FETCH_ASSOC);
    }

    public function searchPages($searchTerm)
    {
        $pages = $this->conn->query("SELECT * FROM pages WHERE name LIKE '$searchTerm%'");
        $pages->execute();
        return $pages->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updatePages($pageName, $newValue)
    {
        $qry = $this->conn->prepare("UPDATE pages SET content = '$newValue' WHERE name = '$pageName'");
        $qry->execute();
    }
}
