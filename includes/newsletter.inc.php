<?php
require "database.inc.php";

if(isset($_POST['submit'])) {

    $mailFrom = mysqli_real_escape_string($connect,trim($_POST['email']));
    $hashedMail = md5($mailFrom);
    $sql = "SELECT * FROM mail WHERE mail='$mailFrom';";
    $query = mysqli_query($connect,$sql);
    $result = mysqli_fetch_assoc($query);
    $mailCheck = $result['mail'];

    if(empty($mailFrom)){
        header("Location: ../index.php?mail=error#newsletter");
        exit();
    }
    if($mailCheck == $mailFrom) {
        header("Location: ../index.php?mail=same#newsletter");
        exit();
    }
    if(!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)){
        header("Location: ../index.php?mail=mail#newsletter");
        exit();
    }
    $sql = "INSERT INTO mail(mail,hashedMail) VALUES ('$mailFrom','$hashedMail');";
    $query = mysqli_query($connect,$sql);

    header("Location: ../index.php?mail=success#newsletter");
}else{
    header("Location: ../index.php?mail=fatalError#newsletter");
}