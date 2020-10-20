<?php
namespace App;

trait GetUrl{

/**
 * Function that pre-format a redirect link
 *
 * @param string $location
 * @param number $id
 * @return string
 */
    protected function getUrl($location, $id){
        return "index.php?location=".$location."&id=".$id;
    }
}