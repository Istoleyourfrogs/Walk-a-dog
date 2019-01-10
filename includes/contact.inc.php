<?php
require "database.inc.php";
require "functions.inc.php";
if(isset($_POST['submit'])) {

    foreach ($_POST as $key => $value) {
        ${$key} = mysqli_real_escape_string($connect, trim($value));
        if (empty(${$key})) {
            header("Location: ../index.php?contactError=empty#contact");
            exit();
        }
    }
    validation("/^[a-zA-Z\s]*$/", $name, 2, "contactError=notValid#contact");
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../index.php?contactError=notValid#contact");
        exit();
    }
    validation("/^[a-zA-Z0-9\.!?,\-\(\):_\s]*$/", $message, 2, "error=notValid#contact");

    $txt = "$name said: ";
    $txt .= $message;
    $subject = "walk·a·dog contact";
    $to = "walkadog@secondsection.in.rs";
    $headers = "From:  $email <$email>";
    if (mail($to, $subject, $txt, $headers)){
    header("Location: ../index.php?contactError=success#contact");
    exit();
    }
    header("Location: ../index.php?contactError=fatal#contact");
}else{
    header("Location ../index.php?contactError=fatal#contact");
    exit();
}