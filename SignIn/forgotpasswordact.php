<?php

include_once '../dbconn.php';

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($db, $_POST['confirmpassword']);
    if($password != $confirmpassword){
        header("Location: Forget.html");
        exit();
    } else{
        $update = "UPDATE users SET password='$password' WHERE username='$username';";
        mysqli_query($db, $update);
        header("Location: signin.html");
        exit();
    }
} else{
    header("Location: Forget.html");
    exit();
}