<?php

require_once('../model/db.php');

class Trackpayment extends Database{
    public function Track($userid,$total,$paid,$owed,$date){
        $sql = "insert into trackpayment (userid,total,paid,owed,date)values('$userid','$total','$paid','$owed','$date')";
        $result = mysqli_query($this->connect,$sql);

    }

    public function DisplaypaymentTrack($id){
        $sql = "select * from trackpayment where userid = '$id'";
        $result = mysqli_query($this->connect,$sql);
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $data = $row;
   

        return $data;

    }
}