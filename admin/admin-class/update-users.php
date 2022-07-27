<?php


require_once('../model/db.php');

class UpdateUser extends Database{
    public function Updateusers(){
        if(isset($_POST['submit'])){
            $fullname = $_POST['fname'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];

            if(isset($_GET['update'])) $id = $_GET['update'];
            $sql = "UPDATE users SET  fullname = '$fullname',  email = '$email', phone ='$phone' where userid = '$id'";    
            $result = mysqli_query($this->connect,$sql);
            if($result){
                header("location:../users.php?success=Users-Data-Updated-Successfully");
                exit();
            }
            else{
                header("location:../users.php?error=Users-Data-Failed-To-Update");
                exit();
            }
        }
    }
}

$users = new UpdateUser();
$users->Updateusers();