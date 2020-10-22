<?php
namespace App;

/**
 * Class that manage everything about the cards
 */
class Cards extends GetUrl{

/**
 * Function that get the url for a specified dish with its id get by a request via "GetUrl"
 *
 * @return string
 */
    public function getDishUrl(){
        return GetUrl::getUrl("dish", $this->id);
    }

    public function getImageUrl(){
        return GetUrl::getImgUrl($this->image);
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
                <img src="'.$this->getImageUrl().'" alt="Picture of the '.$this->dish.' meal">
                <a href="'.$this->getDishUrl().'">'.strtoupper($this->dish).'</a>
            </div>
        </div>
        ';
    }
}