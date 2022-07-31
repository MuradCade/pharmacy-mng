<?php


class Database{
    private $hostname = "localhost";
    private $username = "root";
    private $pwd = "";
    private $dbname = "pharmcay_mng";

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