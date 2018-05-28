<?php

if (!isset($_POST["answer"])) {
    header("location:login.html");
} else {

    require_once __DIR__ . '/../includes/db.php';

    $answ = $_POST["answer"];

    $get_answer = "select secques from ad_log";
    $run = mysqli_query($con, $get_answer);

    $e = mysqli_fetch_row($run);

    $ans = $e[0];

    if ($answ == $ans) {
        header("location:fp2.php");
    } else {
        echo "<script>alert('Invalid Answer.Please Try Again')</script>";
        echo "<script>window.open('forgotpassword.php','_self')</script>";
    }

}
