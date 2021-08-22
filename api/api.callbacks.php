<?php
require('../Source/Database.php');

function routeRequest($request) {
    $database = getDatabase();
    $actions = [
        "img" => getImages,
        "movie" => getMovie,
        "related" => getRelated,
        "page" => getPage,
        "search" => getSearch
    ];
    return $actions[$request]($database);
}

function getDatabase() {
    return new Database();
}

function getImages($database) {
    $images = $database->getImages($_GET['id']);
    return $images[$_GET['type']];
}

function getMovie($database) {
    $movie = $database->getMovie($_GET['id']);
    return $movie[$_GET['prop']];
}

function getRelated($database) {
    $related = $database->getRelated($_GET['id']);
    // echo ($related[$_GET['rel-num']]);
    return $related;
}

function getPage($database) {
    $searchTerm = $_GET['term'] ?? false;
    if (!$searchTerm) {
        return false;
    } 

    $pages = $database->searchPages($searchTerm);
    return json_encode($pages);
}

function getSearch($database) {
    $searchTerm = $_GET['term'] ?? false;
    if (!$searchTerm) {
        return false;
    } 

    $pages = $database->searchPages($searchTerm);
    foreach ($database as $key => $value) {
        $name = $key;
        include('../pages/components/components.searchCard.php');
    }
    return json_encode($pages);
}
// if ($_GET['page'] == 'img') {
//     $images = $database->getImages($_GET['id']);
//     echo ($images[$_GET['type']]);
//     return true;
// }

// if ($_GET['page'] == 'movie') {
//     $movie = $database->getMovie($_GET['id']);
//     echo ($movie[$_GET['prop']]);
//     return true;
// }

// if ($_GET['page'] == 'related') {
//     $related = $database->getRelated($_GET['id']);
//     // echo ($related[$_GET['rel-num']]);
//     echo($related);
//     return;
// }

// if ($_GET['page'] == 'page') {
//     $page = $database->getPages($_GET['pageName']);
//     echo ($page['content']);
//     return true;
// }



// if ($_GET['page'] == 'search') {
//     $searchTerm = $_GET['term'] ?? false;
//     if (!$searchTerm) {
//         return false;
//     } 

//     $pages = $database->searchPages($searchTerm);
//     echo json_encode($pages);
//     return true;
// }
?>

