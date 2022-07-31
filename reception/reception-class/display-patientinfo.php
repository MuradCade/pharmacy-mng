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
     public function onepatient($id){

        $sql = "SELECT * FROM patient where p_id = '$id'";
        $result = mysqli_query($this->connect,$sql);
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $data = $row;
       

            return $data;
    
    }

}

