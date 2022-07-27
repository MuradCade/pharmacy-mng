<?php

require_once('../model/db.php');


class DeletePatient extends Database{
    public function Delete($id){
        $sql = "delete from patient where id = '$id'";
        $result = mysqli_query($this->connect,$sql);
        if($result){
            header("location:patientinfo.php?success=Patient-Info-Deleted-Successfully");
            exit();
        }
        else{
            header("location:patientinfo.php?error=Failed-To-Delete-Patient-Data");
            exit();
        }
    }
}