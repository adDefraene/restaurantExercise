<?php
namespace App;
use PDO, Exception;

class Database{

    private $dbHost;
    private $dbName;
    private $dbUser;
    private $dbPass;
    private $dbConnection;

/**
 * Class' Constructor
 *
 * @param string $dbName
 * @param string $dbUser
 * @param string $dbPass
 * @param string $dbHost
 */
    public function __construct($dbName, $dbUser="root", $dbPass = "", $dbHost="localhost")
    {
        $this->dbName=$dbName;
        $this->dbUser=$dbUser;
        $this->dbPass=$dbPass;
        $this->dbHost=$dbHost;
    }

/**
 * Singleton function that connects to DB:
 *    first verify if already done once
 *       try and catch for the SQL error
 *
 * @return object
 */
    private function connection()
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

/**
 * Function that executes a simple query request in order to display infos:
 *    Execute SQL statement
 *    Get all the responses into an object that needs a foreach to travel the responses
 *    Close the request
 *
 * @param string $statement
 * @param string $className
 * @return object
 */
    public function queryReq($statement, $className)
    {
        $req = $this->connection()->query($statement);
        $datas = $req->fetchAll(PDO::FETCH_CLASS,__NAMESPACE__."\\".$className);
        $req->closeCursor();
        return $datas;
    }

/**
 * Function that executes a prepare request to display infos:
 *    Execute the SQL statement
 *    Execute the statement with the given values
 *    Set the fact the request will return an object
 *    Get the type of fetch by knowing if one response awaited or more
 *    Close the request
 *
 * @param string $statement
 * @param array $values
 * @param string $className
 * @param boolean $one
 * @return object
 */
    public function prepareReq($statement, $values, $className, $one = false){
        $req = $this->connection()->prepare($statement);
        $req->execute($values);
        $req->setFetchMode(PDO::FETCH_CLASS,__NAMESPACE__.'\\'.$className);
        if($one){
            $datas=$req->fetch();
        }else{
            $datas=$req->fetchAll();
        }
        $req->closeCursor();
        return $datas;
    }

/* END OF NEUTRALITY */

/**
 * Function that create an order into the DB
 *
 * @param string $name
 * @param string $phone
 * @param string $date
 * @param string $hour
 * @return void
 */
    public function getOrder($name, $phone, $date, $hour, $idDish)
    {
        $req = $this->connection()->prepare("INSERT INTO orders(orders.name, orders.phone, orders.order_date, orders.order_hour, orders.id_dish) VALUES(?, ?, ?, ?, ?)");
        $req->execute([$name, $phone, $date, $hour, $idDish]);
        $req->closeCursor();
    }

}