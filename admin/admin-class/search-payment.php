<?php

require_once('../model/db.php');

class Searchpayment extends Database{
         public $total = 0; 
    public function Search($date){
      
        $sql = "select * from patient where date = '$date'";
        $result = mysqli_query($this->connect,$sql);
        $row = mysqli_num_rows($result);
        if($row >0){
        while($rows = mysqli_fetch_assoc($result))
        $results = $this->total += $rows['debt'];
        echo "<h6><strong>Date: </strong>".$date."</h6>";
        echo"<h6 class='mt-3 mb-1'> <strong>Total Payment: $</strong>" .$results."</h6>";
        }
        else{
            echo "There Is No data for the specified date";
        }

        
     
       
    }
    public function displaycurrentpaymentdate($date){
        $sql = "select * from patient where date = '$date'";
        $result = mysqli_query($this->connect,$sql);
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $data = $row;

        return $data;
    }
    

public function numberPatient($date){
    $sql = "select * from patient where date = '$date'";
    $result = mysqli_query($this->connect,$sql);
    $row =mysqli_num_rows($result);
    echo "<h6 class='mt-3'> <strong> Number Of Patient:  </strong>".$row."</h6>";
}

}