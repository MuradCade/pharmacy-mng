<?php

include('../model/db.php');
class IdentifyUserLogin extends Database{
    public function Login($username,$pwd){
        
        $sql = "select * from users";
        $result = mysqli_query($this->connect,$sql);
        if($result){
            while($row = mysqli_fetch_assoc($result))
                if($row["username"] == $username && $row["pwd"] == $pwd){
                    session_start();
                    $_SESSION["id"] = $row["id"];
                    $_SESSION["username"] = $row["username"];
                    $_SESSION["role"] = $row["role"];

                    header("location:../home.php");
                    exit();
                }
                else{
                    header("location:../index.php?error=wrong-username-and-password");
                    exit();
                }
            
        }
    }
}