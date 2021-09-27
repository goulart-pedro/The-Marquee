<?php
include('Source/App.php');
$app = new App();
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
    <!--debugging -->
    <script src="node_modules/eruda/eruda.js"></script> <script>eruda.init();</script>
    <!---->
    <title>The Marquee</title>
   </head>

<body>
    <main class="dark">
        <theme-controll></theme-controll>
        <?php include('./pages/components/components.header.php') ?>
        <div class="wrapper">
            <?php $app->router->getPage(); ?>
            <?php include("./pages/components/components.footer.php") ?>
        </div>
        <?php include("./pages/components/components.navbar.php") ?>
    </main>

</body>
</html>
