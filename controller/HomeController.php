<?php
namespace App;

//AUTOLOADER
require "model/Autoloader.php";
Autoloader::register();

class HomeController{

    /**
     * Function that manage the req for the "Home" page
     *
     * @return void
     */
    public static function getHomeDishes(){
        $manager = new ReqManager();
        $dishes = $manager->queryReq(
            "SELECT  dishes.id, dishes.dish, dishes.image FROM dishes ORDER BY dishes.id DESC LIMIT 0,3",
            "Cards"
        );
        require "public/templates/home.php";
    }

    /**
     * Function that manage the req for the "Dish" page
     *
     * @return void
     */
    public static function getDish(){
        $manager = new ReqManager();
        $dish = $manager->prepareReq(
            "SELECT * FROM dishes WHERE dishes.id = ?",
            [$_GET['id']],
            "Dishes",
            true
        );
        require "public/templates/dish.php";
    }

    /**
     * Function that manage the req for the "Menu" page
     *
     * @return void
     */
    public static function getAllDishes(){
        $manager = new ReqManager();
        $dishes = $manager->queryReq(
            "SELECT  dishes.id, dishes.dish, dishes.image FROM dishes ORDER BY dishes.id ASC",
            "Cards"
        );
        require "public/templates/menu.php";
    }

    /**
     * Function that manage the req for the options of the "Order" page
     *
     * @return void
     */
    public static function getDishesForOrder(){
        $manager = new ReqManager();
        $options = $manager->queryReq(
            "SELECT dishes.id, dishes.dish FROM dishes ORDER BY dishes.id ASC",
            "Order"
        );
        require "public/templates/order.php";
    }

    /**
     * Function that operate the insert in the DB for the order in the "Order" page
     *
     * @return void
     */
    public static function insertOrder(){
        $manager = new ReqManager();
        if(isset($_POST['name']) && !empty($_POST['name'])){
            if(preg_match("#^[0-9]{10}$#", $_POST['phone'])){
                if(isset($_POST['date']) && !empty($_POST['date'])){
                    if(isset($_POST['hour']) && !empty($_POST['hour'])){
                        $name=htmlspecialchars($_POST['name']);
                        $phone=$_POST['phone'];
                        $date=htmlspecialchars($_POST['date']);
                        $hour=htmlspecialchars($_POST['hour']);
                        $idDish=$_POST['meal'];
                        $manager->getOrder($name, $phone, $date, $hour, $idDish);
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
    }
}