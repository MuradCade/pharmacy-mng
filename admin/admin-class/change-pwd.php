<?php

require_once('../model/db.php');

class ChangePwd extends Database{
    public function Pwd(){
        if(isset($_POST['submit'])){
            $pwd = $_POST['pwd'];
            $id = $_POST['id'];
            $sql ="UPDATE users SET pwd = '$pwd' where userid = '$id'";
            $result = mysqli_query($this->connect,$sql);
            if($result){
                header("Location:../setting.php?success=Password-Changed-Successfully");
                exit();
            }
            else{
                header("Location:../setting.php?error=Password-Failed-To-Change");
                exit();
            }
        }
    }
}

$pwd = new ChangePwd();
$pwd->Pwd();