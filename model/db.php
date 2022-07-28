<?php


class Database{

    private $hostname = "sql308.epizy.com";
    private $username = "epiz_32264816";
    private $pwd = "dCrcIzDoMlpm";
    private $dbname = "epiz_32264816_pharmacy";
    // private $hostname = "https://databases.000webhost.com/";
    // private $username = "id19234114_root";
    // private $pwd = "&BJQ25I49gZ*tWZa";
    // private $dbname = "id19234114_pharmcay_mng";
    public $connect;
    public function __construct(){

        $this->connect = new mysqli (
            $this->hostname,$this->username,
            $this->pwd,$this->dbname
        );

        if(!$this->connect){
            echo "Failed To Connect";
        }
        


    }
}