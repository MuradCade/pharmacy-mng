<?php

include('../model/db.php');

class addRoom extends Database{
    public function room($name,$desc){

        $sql = "insert into rooms (room_name,room_desc)
        value('$name','$desc')";
        $result = mysqli_query($this->connect,$sql);
    }
}