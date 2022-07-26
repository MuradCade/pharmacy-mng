<?php

include('../model/db.php');

class Editroom extends Database{

    public function room($id,$key){
       $sql = "select * from rooms where id = '$id'";
       $result = mysqli_query($this->connect,$sql);
       $row = mysqli_fetch_assoc($result);
       echo $row[$key];

       return $row;
    }


  
}