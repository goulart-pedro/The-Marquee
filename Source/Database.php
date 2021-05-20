<?php

class Database
{
    private $conn;

    public function __construct()
    {
        // $this->conn = new PDO('mysql:host=localhost;dbname=themarquee;charset=utf8', 'root', '');
        // $this->getPages();
    }
    
    public function getImages($imageId) {
        $imageSrc = $this->conn->prepare('SELECT * FROM images WHERE `id` = :n');
        $imageSrc->bindParam(':n', $imageId);
        $imageSrc->execute();
        return $imageSrc->fetch(PDO::FETCH_ASSOC);
    }

    public function getMovie($movieId) {
        $movie = $this->conn->prepare('SELECT * FROM movies WHERE `id` = :n');
        $movie->bindParam(':n', $movieId);
        $movie->execute();
        return $movie->fetch(PDO::FETCH_ASSOC);
    }

    public function getRelated($movieId) {
        $relatedArray = $this->conn->prepare('SELECT * FROM related WHERE `id` = :n');
        $relatedArray->bindParam(':n', $movieId);
        $relatedArray->execute();
        var_dump($relatedArray->fetch(PDO::FETCH_ASSOC));
        return $relatedArray->fetch(PDO::FETCH_ASSOC);
    }

    public function getPages($pageName = null)
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
        $pages = $this->conn->query("SELECT * FROM movies WHERE title LIKE '$searchTerm%'");
        $pages->execute();
        return $pages->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updatePages($pageName, $newValue)
    {
        $qry = $this->conn->prepare("UPDATE pages SET content = '$newValue' WHERE name = '$pageName'");
        $qry->execute();
    }
}
