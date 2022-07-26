<?php

include('../model/db.php');

class editcategory extends Database{

    public function Edit($id,$key){
       $sql = "select * from patient_category where id = '$id'";
       $result = mysqli_query($this->connect,$sql);
       $row = mysqli_fetch_assoc($result);
       echo $row[$key];

       return $row;
    }


  
}