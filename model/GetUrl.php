<?php
namespace App;

/**
 * Trait that manage links
 */
class GetUrl{

/**
 * Function that pre-format a redirect link
 *
 * @param string $location
 * @param number $id
 * @return string
 */
    protected static function getUrl($location, $id){
        return "index.php?location=".$location."&id=".$id;
    }


    /**
     * Function that pre-format a img src link
     *
     * @param string $file
     * @return string
     */
    protected static function getImgUrl($file){
        return "public/images/".$file;
    }
}