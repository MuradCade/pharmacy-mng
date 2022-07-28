<?php
require_once('../model/db.php');

class displayrooms extends Database{
    public function rooms(){

        $sql = "SELECT * FROM rooms";
        $result = mysqli_query($this->connect,$sql);
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $data = $row;
       

            return $data;
    
    }
}

