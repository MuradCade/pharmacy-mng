<?php

require_once('../model/db.php');

class DisplayProfileImg extends Database{
    public function Porfile($id,$key){
        $sql = "select username,img from users where userid = '$id'";
        $result = mysqli_query($this->connect,$sql);
        while($row = mysqli_fetch_assoc($result))
      echo  $row[$key];
    }
}


