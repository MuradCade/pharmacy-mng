<?php

require_once('../model/db.php');

class Usersdata extends Database{
    public function displayUser($id){
        $sql = "select fullname,email,phone from users where userid = '$id'";
        $result = mysqli_query($this->connect,$sql);
         $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $data = $row;

        return $data;
    }
}


?>