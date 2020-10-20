<?php
namespace App;

//AUTOLOADER
class Autoloader{
    public static function register()
    {
        spl_autoload_register([__CLASS__,'autoload']);
    }
    
    private static function autoload($class)
    {
        if(strpos($class,__NAMESPACE__.'\\') === 0){
            //GET ONLY THE CLASS NAME FOR THE NEXT REQUIRE
            $class = str_replace(__NAMESPACE__.'\\','',$class);
            //TRANSFORM THE \ INTO /
            $class = str_replace('\\','/',$class);
            //DO THE REQUIRE
            require __DIR__.'/'.$class.'.php';
        }
    }   
}