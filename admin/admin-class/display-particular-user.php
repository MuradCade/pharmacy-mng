<?php

require('../model/db.php');

class DisplayUser extends Database{
    public function User($id){
     
        $sql = "select * from users where userid = '$id'";
        $result = mysqli_query($this->connect,$sql);
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $data = $row;

return $data;

    }
}