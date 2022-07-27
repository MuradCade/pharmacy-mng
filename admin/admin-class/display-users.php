<?php

require_once('../model/db.php');

class CurrentUsers extends Database{
    public function Users(){
        $sql = "SELECT * FROM users";
        $result = mysqli_query($this->connect,$sql);
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $data = $row;

return $data;
    }
}