<?php
namespace App;

//HOME CONTROLLER
    require "controller/HomeController.php";

//ROUTER
    try{
        if(isset($_GET['location'])){
            if($_GET['location'] == "home"){
                HomeController::getHomeDishes();
            }else if($_GET['location']=="menu"){
                HomeController::getAllDishes();
            }else if($_GET['location']=="dish"){
                HomeController::getDish();
            }else if($_GET['location']=="order"){
                HomeController::getDishesForOrder();
            }else if($_GET['location']=="orderTreatment"){
                HomeController::insertOrder();
            }else{
                require "public/templates/404.php";
            }
        }else{
            HomeController::getHomeDishes();
        }
    }catch(\Exception $e){
        $errorMessage = $e->getMessage();
        require "public/templates/404.php";
    }

?>