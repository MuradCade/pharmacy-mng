<?php

include('../model/db.php');

class UpdateUser extends Database{
    public function Update(){
        if(isset($_POST['submit'])){
            if(isset($_GET['id'])) $id = $_GET['id'];
            $username = $_POST['username'];
            $fname = $_POST['fname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            

            $img = $_FILES["file"]["name"];
            $tempname = $_FILES["file"]["tmp_name"];
            $folder = "../admin-img/" . $img;
           

          if(empty($img)){

            $sql = "UPDATE users SET username = '$username', fullname = '$fname', email = '$email', phone = '$phone' where userid = '$id'";
            $result = mysqli_query($this->connect,$sql);
            
             if ($result) {
                header("location:../profile.php?success=Profile-Updated-Successfully");
                exit();
            } else {
                header("location:../profile.php?error=Profile-Failed-To-Update");
                exit();

            }
          }
          else{
          
            $sql = "UPDATE users SET username = '$username' , img='$img', fullname = '$fname', email = '$email', phone = '$phone' where userid = '$id'";
            $result = mysqli_query($this->connect,$sql);
            
             if (move_uploaded_file($tempname, $folder)) {
                header("location:../profile.php?success=Profile-Updated-Successfully");
                exit();
            } else {
                header("location:../profile.php?error=Profile-Failed-To-Update");
                exit();

            }
          }
            
           
        }
    }
}

$user = new UpdateUser();
$user->Update();