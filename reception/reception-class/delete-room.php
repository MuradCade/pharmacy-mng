<?php

require_once('../model/db.php');

class Deleterooms extends Database{
    public function delete($id){
        $sql = "delete from  rooms where id = '$id'";
        $result = mysqli_query($this->connect,$sql);
        if($result){
            header("location:rooms.php?success=Room-information-Deleted-successfully");
            exit();
        }
        else{
            header("location:rooms.php?error=Room-information-Failed-To-Delete");
            exit();
        }
    }
}