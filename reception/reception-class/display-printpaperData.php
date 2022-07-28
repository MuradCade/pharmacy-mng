<?php
require_once('../model/db.php');

class DisplayData extends Database{
    public function Display(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "select * from patient where id = '$id'";
            $result = mysqli_query($this->connect,$sql);
            $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $data = $row;
       

            return $data;
    
        }
    }
}