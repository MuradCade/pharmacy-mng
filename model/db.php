<?php


class Database{
    private $hostname = "localhost";
    private $username = "id19338987_admin";
    private $pwd = "I*BpabTa7&Blvr1j";
    private $dbname = "id19338987_pharmacy";

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