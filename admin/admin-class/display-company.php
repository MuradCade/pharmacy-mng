<?php

require_once('../model/db.php');

class Displaycompany extends Database{
    public function company(){
        $sql = "select * from company";
        $result = mysqli_query($this->connect,$sql);
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $data = $row;
   

        return $data;

    }

}