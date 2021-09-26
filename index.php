<?php
define('APP_ROOT', realpath(dirname(__FILE__)));
include('./Source/Database.php');
include('./Router.php');
$router= new Router();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" initial-scale="1.0" />
    <script src="./Source/script.js" type="module" defer></script>
    <link rel="stylesheet" href="./css/components/components.navbar.css">
    <link rel="stylesheet" href="./css/components/components.footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,900;1,400&display=swap" rel="stylesheet">
    <title>The Marquee</title>
</head>

<body>
    <main class="dark">
        <theme-controll></theme-controll>
        <?php include('./pages/components/components.header.php') ?>
        <div class="wrapper">
            <?php $router->getPage(); ?>
            <?php include("./pages/components/components.footer.php") ?>
        </div>
        <?php include("./pages/components/components.navbar.php") ?>
    </main>

</body>

</html>
