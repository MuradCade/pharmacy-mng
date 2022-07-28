<?php

require_once("add-complain.php");
// update complain
if(isset($_POST['submit'])){
if(isset($_GET['update'])) $id = $_GET['update'];

        $fullname = $_POST['fname'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

    $update= new AddComplain();
    $update->Updatecomplain($id,$fullname,$phone,$message);

}