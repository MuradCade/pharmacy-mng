<?php
require_once('../model/db.php');

class displayPatient extends Database{
    public function allpatient(){

        $sql = "SELECT * FROM patient";
        $result = mysqli_query($this->connect,$sql);
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $data = $row;
       

            return $data;
    
    }
    public function onepatient(){

        $sql = "SELECT * FROM patient limit 1";
        $result = mysqli_query($this->connect,$sql);
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $data = $row;
       

            return $data;
    
    }
}

