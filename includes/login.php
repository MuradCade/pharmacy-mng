<?php
include('../class/login.class.php');
if(isset($_POST['login'])){
    
    function senitaize($data){
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        $data = trim($data);
        $data = str_replace(' ','',$data);
        return $data;
    }
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
else{
    header('location:../index.php');
    exit();
}