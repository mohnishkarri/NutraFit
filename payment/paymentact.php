<?php

include_once '../dbconn.php';

if(isset($_POST['contactsubmit'])){
    $CardHolder = mysqli_real_escape_string($db, $_POST['CardHolder']);
    $CardNum = mysqli_real_escape_string($db, $_POST['CardNum']);
    $ValidTill = mysqli_real_escape_string($db, $_POST['ValidTill']);
    $CVV = mysqli_real_escape_string($db, $_POST['CVV']);
    if(empty($CardHolder) || empty($CardNum) || empty($ValidTill) || empty($CVV)){
        header("Location: ../Payment/Payment.php?empty");
        exit();
    } else{
        $insert = "INSERT INTO payment (cardholder, cardnum, validtill, CVV) VALUES ('$CardHolder', '$CardNum', '$ValidTill', '$CVV');";
        mysqli_query($db, $insert);
        header("Location: ../Payment/Payment.php?submit");
        exit();
    }
} else{
    header("Location: ../Payment/Payment.php");
    exit();
}