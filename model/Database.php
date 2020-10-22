<?php
namespace App;
use PDO, Exception;

class Database{

    private $dbHost = "localhost";
    private $dbName = "restaurant_poo";
    private $dbUser = "root";
    private $dbPass = "";
    private $dbConnection;

/**
 * Singleton function that connects to DB:
 *    first verify if already done once
 *       try and catch for the SQL error
 *
 * @return object
 */
    protected function connection()
    {
        if(is_null($this->dbConnection)){
            try{
                $bdd = new PDO('mysql:host='.$this->dbHost.';dbname='.$this->dbName.';charset=utf8',$this->dbUser,$this->dbPass,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                $this->dbConnection = $bdd;
            }catch(Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
        return $this->dbConnection;
    }
}