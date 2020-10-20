<?php
    namespace App;
//AUTOLOADER
    require "classes/Autoloader.php";
    Autoloader::register();

//ROUTER
    $router = [
        "home" => "templates/home.php",
        "menu" => "templates/menu.php",
        "dish" => "templates/dish.php",
        "order" => "templates/order.php"
    ];

    if(isset($_GET['location'])){
        if(array_key_exists($_GET['location'], $router)){
            $page = $router[$_GET['location']];
        }else{
            $page = "templates/404.php";
        }
    }else{
        $page = "templates/home.php";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>POO 6 - Restaurant exercice</title>
</head>
<body>
    <?php include("templates/nav.php") ?>
    <?php include($page) ?>
    <?php include("templates/footer.php") ?>
</body>
</html>