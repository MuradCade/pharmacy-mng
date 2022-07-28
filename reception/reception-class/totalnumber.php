<?php

require_once('../model/db.php');

class TotalNumber extends Database{

    public function Totalpatient(){
        $sql = "select * from patient";
        $result = mysqli_query($this->connect,$sql);
        $row = mysqli_num_rows($result);
        echo $row;
       
    }
    public function Totalpayment(){
        $sql = "select * from patient";
        $result = mysqli_query($this->connect,$sql);
        $row = mysqli_num_rows($result);
        echo $row;
       
       
    }
    public function TotalUsers(){
        $sql = "select * from users";
        $result = mysqli_query($this->connect,$sql);
        $row = mysqli_num_rows($result);
        echo $row;
    }
    public function TotalRooms(){
        $sql = "select * from rooms";
        $result = mysqli_query($this->connect,$sql);
        $row = mysqli_num_rows($result);
        echo $row;
    }

}




