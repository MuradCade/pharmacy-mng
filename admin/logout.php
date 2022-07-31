<?php
session_start();

class logout{

    public function logoutuser(){
        session_destroy();
        header("location:../index.php");
        exit();
    }
}

$logout = new logout();
$logout->logoutuser();