<?php
namespace App;

class Order{
    
use GetUrl;

/**
 * Function that get the url for the order via "GetUrl"
 *
 * @return string
 */
    public function getDishUrl(){
        return $this->getUrl("order", $this->id);
    }

/**
 * Function that detects if the dish analysed is the one that was gotten via the $_GET['id']
 *
 * @param number $getId
 * @return string
 */
    public function ifDishSelected($getId){
        return ($this->id == $getId) ? " selected " : null;
    }

/**
 * Function that returns the options in the select tags in th Order page
 *
 * @param number $getId
 * @return string
 */
    public function orderOptions($getId){
        return "<option ".$this->ifDishSelected($getId)." value='".$this->id."'>".strtoupper($this->dish)."</option>";
    }
}