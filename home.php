<?php
session_start();
if(isset($_SESSION["id"]) && isset($_SESSION["username"]))
{
    if(isset($_SESSION["role"]) == "admin")
    {
        header("location:admin/index.php");
        die();
    }
    else if($_SESSION["role"] == "reception"){
        header("location:reception/index.php");
        die();
    }
    else{
        header("Location:index.php?error=Login-please");
        die();
    }
}
 else{
    header("Location:index.php?error=Login-please");
    die();
    }

