<?php

require_once('../model/db.php');

class Deletecategory extends Database{
    public function Delete($id){
        $sql = "delete from patient_category where id = '$id'";
        $result = mysqli_query($this->connect,$sql);
        if($result){
            header("location:category.php?success=Category-Deleted-successfully");
            exit();
        }
        else{
            header("location:category.php?error=Category-Failed-To-Delete");
            exit();
        }
    }
}