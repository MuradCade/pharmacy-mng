<?php
require_once('../model/db.php');

class displayPatient extends Database{
    public function allpatient($id){

        $sql = "SELECT * FROM patient where id = '$id' limit 1";
        $result = mysqli_query($this->connect,$sql);
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $data = $row;
       

            return $data;
    
    }

}

