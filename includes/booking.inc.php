<?php
require "database.inc.php";
if(isset($_POST['submit'])){

    $firstName = mysqli_real_escape_string($connect,trim($_POST['firstName']));
    $lastName = mysqli_real_escape_string($connect,trim($_POST['lastName']));
    $email = mysqli_real_escape_string($connect,trim($_POST['email']));
    $address = mysqli_real_escape_string($connect,trim($_POST['address']));
    $phone = mysqli_real_escape_string($connect,trim($_POST['phone']));
    $typeOfWalk = mysqli_real_escape_string($connect,trim($_POST['typeWalk']));

    //checks if any of the variables above are empty
    if(empty($firstName) or empty($lastName) or empty($email) or empty($address) or empty($phone) or empty($typeOfWalk)){
        header("Location: ../booking.php?emptyError");
        exit();
    }
    //checks for only letters in firstName and lastName
    if(!preg_match("/^[a-zA-Z]*$/", $firstName) or !preg_match("/^[a-zA-Z]*$/", $lastName)) {
        header("Location: ../booking.php?nameError");
        exit();
    }
    //checks if the email has a valid format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../booking.php?emailError");
        exit();
    }
    //checks if the address has letters,numbers,spaces and a /
    if(!preg_match("/^[a-zA-Z0-9\/\s]*$/", $address)){
        header("Location: ../booking.php?addressError");
        exit();
    }
    //checks for only numbers and if it begins with +381
    if(!preg_match("/^\+381[0-9]*$/", $phone)){
        header("Location: ../booking.php?phoneError");
        exit();
    }
    //checks if the walks are /oneTime|daily|weekly/
    if(!preg_match("/^(oneTime|daily|weekly)$/",$typeOfWalk)){
        header("Location: ../booking.php?walkError");
        exit();
    }

    header("Location: ../booking.php?success");
    exit();






}else{
    header("Location: ../booking.php?fatalError");
    exit();
}