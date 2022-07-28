<?php
session_start();
session_start();
if (isset($_SESSION['userid']) && isset($_SESSION['username'])) {
    if ($_SESSION['role'] == 'admin') {
        header("location:admin/index.php");
        exit();
    } else if ($_SESSION['role'] == 'user') {
        header("location:reception/index.php");
        exit();
    } else {
        header("location:login.php?error-role-un-specified");
        exit();
    }
} else {
    header("location:login.php?error=enter-your-info-to-login");
    exit();
}
