<?php

include_once '../dbconn.php';

if(isset($_POST['signupsubmit'])){
    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $lname = mysqli_real_escape_string($db, $_POST['lname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $pwd = mysqli_real_escape_string($db, $_POST['pwd']);
    $repwd = mysqli_real_escape_string($db, $_POST['RePwd']);
    $bdate = mysqli_real_escape_string($db, $_POST['DateofBirth']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);

    if($pwd != $repwd){
        header("Location: ../Signup/signup.php?passwordsdonotmatch=");
        exit();
    } else{
        $check = "SELECT * FROM users WHERE email='$email'";
        $checkresult = mysqli_query($db, $check);
        if(mysqli_num_rows($checkresult) > 0){
            header("Location: ../Signup/signup.php?useralreadyregistered=");
            exit();
        } else{
            $checkusername = "SELECT * FROM users WHERE username='$username'";
            $checkusernameresult = mysqli_query($db, $checkusername);
            if(mysqli_num_rows($checkusernameresult) > 0){
                header("Location: ../Signup/signup.php?usernamealreadytaken=");
                exit();
            } else{
                $insert = "INSERT INTO users (fname, lname, email, password, username, bdate, gender) VALUES ('$fname', '$lname', '$email', '$pwd', '$username', '$bdate', '$gender')";
                mysqli_query($db, $insert);
                header("Location: ../Signin/signin.html?rgistered");
                exit();
            }
        }
    }
} else{
    header("Location: ../Signup/signup.html");
    exit();
}