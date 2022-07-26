<?php
require_once('../model/db.php');

class displaycategory extends Database{
    public function allcategory(){

        $sql = "SELECT * FROM patient_category";
        $result = mysqli_query($this->connect,$sql);
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $data = $row;
       

            return $data;
    
    }
}

