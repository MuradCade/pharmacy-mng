<?php

class logout{

    public function logoutuser(){
        session_start();
        session_destroy();
        header("location:../index.php");
        exit();
    }
}

$logout = new logout();
$logout->logoutuser();