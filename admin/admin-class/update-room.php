<?php

require_once('../model/db.php');

class Updaterooms extends Database{
    public function Update(){
        if(isset($_POST['submit'])){
            $id = $_GET['display'];
        $name = $_POST['room_name'];
        $desc = $_POST['desc'];
        $sql = "UPDATE rooms SET room_name = '$name' , room_desc = '$desc' where id = '$id'";
        $result = mysqli_query($this->connect,$sql);
        if($result){
            header("location:../rooms.php?success=Room-Data-Updated-Successfully");
            exit();

        }
        else{
            header("location:../category.php?error=Room-Data-Update-Failed");
            exit();

        }
       
        }
       
    }
}

$update = new Updaterooms();
$update->Update();


  

