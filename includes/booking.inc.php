<?php
require "database.inc.php";
if(isset($_POST['submit'])){

    $firstName = mysqli_real_escape_string($connect,trim($_POST['firstName']));
    $lastName = mysqli_real_escape_string($connect,trim($_POST['lastName']));
    $email = mysqli_real_escape_string($connect,trim($_POST['email']));
    $address = mysqli_real_escape_string($connect,trim($_POST['address']));
    $phone = mysqli_real_escape_string($connect,trim($_POST['phone']));
    $typeOfWalk = mysqli_real_escape_string($connect,trim($_POST['typeWalk']));
    $date = mysqli_real_escape_string($connect,trim($_POST['date']));
    $time = mysqli_real_escape_string($connect,trim($_POST['time']));
    $day = mysqli_real_escape_string($connect,trim($_POST['day']));

    //checks if any of the variables above are empty
    if(empty($firstName) or empty($lastName) or empty($email) or empty($address) or empty($phone) or empty($typeOfWalk)){
        header("Location: ../booking.php?emptyError");
        exit();
    }
    //checks for only letters in firstName and lastName or if the length is shorter than 2
    if(!preg_match("/^[a-zA-Z]*$/", $firstName) or !preg_match("/^[a-zA-Z]*$/", $lastName) or strlen($firstName)<2 or strlen($lastName)<2) {
        header("Location: ../booking.php?nameError");
        exit();
    }
    //checks if the email has a valid format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../booking.php?emailError");
        exit();
    }
    //checks if the address has letters,numbers,spaces and a / or if the length is shorter than 5
    if(!preg_match("/^[a-zA-Z0-9\/\s]*$/", $address) or strlen($address)<5){
        header("Location: ../booking.php?addressError");
        exit();
    }
    //checks for only numbers and if it begins with +381 or if the length is shorter than 9
    if(!preg_match("/^\+381\s[0-9\/-]*$/", $phone) or strlen($phone)<9){
        header("Location: ../booking.php?phoneError");
        exit();
    }
    //checks if the walks are /oneTime|daily|weekly/
    if(!preg_match("/^(oneTime|daily|weekly)$/",$typeOfWalk)){
        header("Location: ../booking.php?walkError");
        exit();
    }
    switch ($typeOfWalk){
        case "oneTime":

            if(empty($date) or empty($time)){
                header("Location: ../booking.php?oneTimeEmpty");
                exit();
            }
            if(dateValidation($date) == null or timeValidation($time) == null){
                header("Location: ../booking.php?dateOrTimeNotValid");
                exit();
            }
            if(!empty($day)){
                header("Location: ../booking.php?dayFatalError");
                exit();
            }
            break;
        case "daily":

            if(empty($time)){
                header("Location: ../booking.php?dailyEmpty");
                exit();
            }
            if(timeValidation($time) == null){
                header("Location: ../booking.php?timeFatalError");
                exit();
            }
            if(!empty($date) or !empty($day)){
                header("Location: ../booking.php?dateOrDayNotEmpty");
                exit();
            }
            break;
        case "weekly":
            if(empty($day) or empty($time)){
                header("Location: ../booking.php?weeklyEmpty");
                exit();
            }
            if(!dayValidation($day)){
                header("Location: ../booking.php?dayFatalError");
                exit();
            }
            if(!empty($date)){
                header("Location: ../booking.php?dateNotEmpty");
                exit();
            }
            break;
        default :
            header("Location: ../booking.php?daysNotGoodError");
            exit();
    }

    header("Location: ../booking.php?success");
    exit();

}else{
    header("Location: ../booking.php?fatalError");
    exit();
}

function dayValidation($dayInput){
    $daysOfWeek = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
    if(in_array($dayInput,$daysOfWeek)){
        return $dayInput;
    }
    return null;

}

function timeValidation($time){
    if(!preg_match("/^(0{1,1}[0-9]|1{1,1}[0-9]|2{1,1}[0-3]){1,1}\:{1,1}[0-5]{1,1}[0-9]$/",$time)){
        return null;
    }else{
        return $time;
    }
}

function dateValidation($date){
    if(!preg_match("/^2[0-9]{3}\-(0[1-9]|1[0-2])\-(0[1-9]|1[0-9]|2[0-9]|3[0-1])$/",$date)){
        return null;
    }else{
        return $date;
    }
}