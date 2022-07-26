<?php
include('../class/login.class.php');

function senitaize($data){
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = trim($data);
    $data = str_replace(' ','',$data);
    return $data;
}

if(isset($_POST['login'])){
    $username = senitaize($_POST['username']);
    $pwd = senitaize($_POST['pwd']);

    if(empty($username)){
        header('location:../index.php?error=empty-username-field');
        die();
    }
    else if(empty($pwd)){
        header('location:../index.php?error=empty-password-field');
        die();
    }
    else{
        $checkuser = new IdentifyUserLogin();
        $checkuser->login($username,$pwd);
    }

}