<?php

include_once '../dbconn.php';

if(isset($_POST['contactsubmit'])){
    $fname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lname = mysqli_real_escape_string($db, $_POST['lastname']);
    $country = mysqli_real_escape_string($db, $_POST['country']);
    $description = mysqli_real_escape_string($db, $_POST['description']);
    if(empty($fname) || empty($lname) || empty($country) || empty($description)){
        header("Location: contact.php?empty");
        exit();
    } else{
        $insert = "INSERT INTO contact (fname, lname, country, message) VALUES ('$fname', '$lname', '$country', '$description');";
        mysqli_query($db, $insert);
        header("Location: contact.php?submit");
        exit();
    }
} else{
    header("Location: contact.php");
    exit();
}