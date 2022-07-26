<?php


class Database{

    // private $hostname = "localhost";
    // private $username = "root";
    // private $pwd = "";
    // private $dbname = "pharmcay_mng";
    private $hostname = "https://databases.000webhost.com/";
    private $username = "id19234114_root";
    private $pwd = "&BJQ25I49gZ*tWZa";
    private $dbname = "id19234114_pharmcay_mng";
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