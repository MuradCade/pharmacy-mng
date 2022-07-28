<?php
require_once('../model/db.php');

class displayPayment extends Database{
    public function allpayment(){

        $sql = "SELECT * FROM patient";
        $result = mysqli_query($this->connect,$sql);
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $data = $row;
       

            return $data;
    
    }
 
}

