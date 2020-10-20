<?php
namespace App;

class Cards{

use GetUrl;

/**
 * Function that get the url for a specified dish with its id get by a request via "GetUrl"
 *
 * @return string
 */
    public function getDishUrl(){
        return $this->getUrl("dish", $this->id);
    }

/**
 * Function that generates the cards along the website
 *
 * @return string
 */
    public function getCard(){
        return '
        <div class="card">
            <div class="card-row">
                <img src="images/'.$this->image.'" alt="Picture of the '.$this->dish.' meal">
                <a href="'.$this->getDishUrl().'">'.strtoupper($this->dish).'</a>
            </div>
        </div>
        ';
    }
}