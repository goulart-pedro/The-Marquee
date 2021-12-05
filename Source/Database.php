<?php
class Database
{
    private $conn;

    public function __construct($dbname, $host, $dbusr, $dbpwd)
    {
        $this->conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", "$dbusr","$dbpwd");
        //$this->getPages();
    }
    

    public function getImages($movieId) {
	    $imageTypes = [
		    "hero__frente" => "./img/$movieId/hero__frente.webp",
		    "hero__fundo" => "./img/$movieId/hero__fundo.webp",
		    "sinopse__frente" => "./img/$movieId/sinopse__frente.webp",
		    "sinopse__fundo" => "./img/$movieId/sinopse__fundo.webp",
		    "thumbnail" => "./img/$movieId/thumbnail.webp"
	    ];

	    return $imageTypes;
    }

    public function getMovie($movieId) {
        $movie = $this->conn->prepare('SELECT * FROM Movies WHERE `id` = :n');
        $movie->bindParam(':n', $movieId);
        $movie->execute();
        return $movie->fetch(PDO::FETCH_ASSOC);
    }

    public function getRelated($movieId) {
        $relatedArray = $this->conn->prepare('SELECT * FROM Related WHERE `id` = :n');
        $relatedArray->bindParam(':n', $movieId);
        $relatedArray->execute();
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
        $pages = $this->conn->query("SELECT * FROM Movies WHERE title LIKE '$searchTerm%'");
        $pages->execute();
        return $pages->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updatePages($pageName, $newValue)
    {
        $qry = $this->conn->prepare("UPDATE pages SET content = '$newValue' WHERE name = '$pageName'");
        $qry->execute();
    }

    public function getUser($email) {
        $qry = $this->conn->prepare('SELECT * FROM Users where `Email` = :n');
        $qry->bindParam(':n', $email);
        $qry->execute();
        return $qry->fetch(PDO::FETCH_ASSOC);
    }
    
    public function comment($author, $movie, $text) {
        $qry = $this->conn->prepare("INSERT INTO Comments (Author, Movie, Text) values (:x, :y, :z)");
        $qry->bindParam(':x', $author);
        $qry->bindParam(':y', $movie);
        $qry->bindParam(':z', $text);
        $qry->execute();
    }
    
    public function getComments($movieId) {
        $qry = $this->conn->prepare("SELECT * FROM Comments WHERE Movie = :x");
        $qry->bindParam(':x', $movieId);
        $qry->execute();
        return $qry->fetchAll(PDO::FETCH_ASSOC);
    }
}
