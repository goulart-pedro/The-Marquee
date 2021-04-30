<?php
include('../Source/Database.php');

$database = new Database;

?>
<?php

if ($_GET['display'] == 'page') {
    $page = $database->getPages($_GET['pageName']);
    echo $page['content'];
    return false;
}

?>
<?php if ($_GET['display'] == 'search') :
    $searchTerm = $_GET['term'] ?? false;
    if (!$searchTerm) return false;
    $pages =  $database->searchPages($searchTerm);

    foreach ($pages as $key => $value) : ?>
        <div class="search-card">
            <a href=<?php echo "?page=$value[name]" ?>>
                <span>
                    <?= $value['name'] ?>
                </span>
            </a>
        </div>
    <?php endforeach ?>
    <?php return false ?>
<?php endif ?>