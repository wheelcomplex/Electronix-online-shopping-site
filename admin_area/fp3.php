<?php

if (!isset($_POST["tex"])) {
    header("location:login.html");
} else {

    require_once __DIR__ . '/../includes/db.php';

    $newpass = $_POST["tex"];
    $confirm = $_POST["pass"];

    if ($newpass == $confirm) {
        $query = "update ad_log set apwd ='$newpass'";
        $run = mysqli_query($con, $query);

        echo "<script>alert('Password Changed.Please Login..')</script>";
        echo "<script>window.open('login.html','_self')</script>";

    } else {

        echo "<script>alert('Password not match.please Re-enter')</script>";
        echo "<script>window.open('fp2.php',_self)</script>";
    }

}
