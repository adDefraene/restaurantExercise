<?php
namespace App;

class Dishes{

/**
 * Function that redirect to the order page where the item we want is selected
 *
 * @return string
 */
    public function getOrderUrl(){
        return "index.php?location=order&id=".$this->id;
    }
}
