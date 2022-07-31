<?php
session_start();
if (isset($_SESSION['userid']) && isset($_SESSION['username'])) {
    if ($_SESSION['role'] == 'admin') {
        header("location:admin/index.php");
        exit();
    } else if ($_SESSION['role'] == 'reception') {
        header("location:reception/index.php");
        exit();
    } else {
        header("location:index.php?error=Wrong-Username-And-Password");
        exit();
    }
} else {
    header("location:index.php?error=Login-To-Your-Account");
    exit();
}
