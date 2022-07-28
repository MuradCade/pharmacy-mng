<?php

require_once('../model/db.php');

class addRoom extends Database{
    public function room($name,$desc){

        $sql = "insert into rooms (room_name,room_desc)
        values('$name','$desc')";
        $result = mysqli_query($this->connect,$sql);
    }
}