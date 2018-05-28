<?php

if (!isset($_POST["text1"])) {
    header("location:login.html");
} else {

    require_once __DIR__ . '/../includes/db.php';

    $uid = $_POST["text1"];
    $pwd = $_POST["password1"];

    $qry = "select * from ad_log where aname='$uid' and apwd='$pwd'";

    $result = mysqli_query($con, $qry);

    $n = mysqli_num_rows($result);

    if ($n > 0) {
        header("location:index.php?tn=$uid");

    } else {
        echo "<script>alert('Email or password is incorrect!')</script>";
        echo "<script>window.open('login.html','_self')</script>";
    }

}
