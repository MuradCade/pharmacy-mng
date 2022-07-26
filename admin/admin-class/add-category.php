<?php

include('../model/db.php');

class patentcategory extends Database{
    public function category($name,$desc){

        $sql = "insert into patient_category (category_name,category_desc)
        value('$name','$desc')";
        $result = mysqli_query($this->connect,$sql);


    }
}