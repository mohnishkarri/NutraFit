<?php
session_start();
include_once '../dbconn.php';

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($db, $_POST['usr']);
    $password = mysqli_real_escape_string($db, $_POST['pwd']);

    $check = "SELECT * FROM users WHERE username='$username'";
    $checkresult = mysqli_query($db, $check);
    if(mysqli_num_rows($checkresult) < 1){
        header("Location: ../SignIn/signin.php?nouserregistered=");
        exit();
    } else{
        $checkrow = mysqli_fetch_assoc($checkresult);
        $rowpassword = $checkrow['password'];
        if($rowpassword != $password){
            header("Location: ../SignIn/signin.php?wrongpassword=");
            exit();
        } elseif($rowpassword === $password){
            $_SESSION['username'] = $username;
            header("Location: ../shop/shop.php");
            exit();
        }
    }
} else{
    header("Location: ../SignIn/signin.php?submit");
    exit();
}