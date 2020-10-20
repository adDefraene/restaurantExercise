<?php
    namespace App;
//AUTOLOADER
    require "classes/Autoloader.php";
    Autoloader::register();

//CONNECTION TO DB
    $db = new Database("restaurant_poo");

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
        }else if($_GET['location']=="orderTreatment"){
            if(isset($_POST['name']) && !empty($_POST['name'])){

                if(preg_match("#^[0-9]{10}$#", $_POST['phone'])){

                    if(isset($_POST['date']) && !empty($_POST['date'])){

                        if(isset($_POST['hour']) && !empty($_POST['hour'])){
                            $name=htmlspecialchars($_POST['name']);
                            $phone=$_POST['phone'];
                            $date=htmlspecialchars($_POST['date']);
                            $hour=htmlspecialchars($_POST['hour']);
                            $idDish=$_POST['meal'];
                            $db->getOrder($name, $phone, $date, $hour, $idDish);
                            header("LOCATION:index.php?location=order&order=ok");

                        }else{
                            header("LOCATION:index.php?location=order&err=4");
                        }
                    }else{
                        header("LOCATION:index.php?location=order&err=3");
                    }
                }else{
                    header("LOCATION:index.php?location=order&err=2");
                }
            }else{
                header("LOCATION:index.php?location=order&err=1");
            }
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