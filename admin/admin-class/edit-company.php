<?php

require_once('../model/db.php');

class EditCompany extends Database{
    public function Edit($id){
        $sql = "select * from company where id = '$id'";
        $result = mysqli_query($this->connect,$sql);
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $data = $row;
   

        return $data;
    }
}