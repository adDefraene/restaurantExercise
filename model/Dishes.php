<?php
namespace App;

/**
 * Class that manages links in the "Dish" page
 */
class Dishes extends GetUrl{

/**
 * Function that redirect to the order page where the item we want is selected
 *
 * @return string
 */
    public function getOrderUrl(){
        return GetUrl::getUrl('order', $this->id);
    }

    public function getImageUrl(){
        return GetUrl::getImgUrl($this->image);
    }
}
