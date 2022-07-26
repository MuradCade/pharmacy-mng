<?php

require_once('../model/db.php');

class UpdateCategory extends Database{
    public function Update(){
        if(isset($_POST['submit'])){
            $id = $_GET['display'];
        $name = $_POST['c_name'];
        $desc = $_POST['desc'];
        $sql = "UPDATE patient_category SET category_name = '$name' , category_desc = '$desc' where id = '$id'";
        $result = mysqli_query($this->connect,$sql);
        if($result){
            header("location:../category.php?success=Patient-Category-Updated-Successfully");
            exit();

        }
        else{
            header("location:../category.php?error=Patient-Category-Update-Failed");
            exit();

        }
       
        }
       
    }
}

$update = new UpdateCategory();
$update->Update();


  

