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
            $date = mysqli_real_escape_string($connect,trim($_POST['date']));
            $time = mysqli_real_escape_string($connect,trim($_POST['time']));
            $day = mysqli_real_escape_string($connect,trim($_POST['day']));
            if(empty($date) or empty($time)){
                header("Location: ../booking.php?oneTimeEmpty");
                exit();
            }
            break;
        case "daily":
            $date = mysqli_real_escape_string($connect,trim($_POST['date']));
            $time = mysqli_real_escape_string($connect,trim($_POST['time']));
            $day = mysqli_real_escape_string($connect,trim($_POST['day']));
            if(empty($time)){
                header("Location: ../booking.php?dailyEmpty");
                exit();
            }
            if(!empty($date)){
                header("Location: ../booking.php?dateNotEmpty");
                exit();
            }
            break;
        case "weekly":

            $time = mysqli_real_escape_string($connect,trim($_POST['time']));
            $day = mysqli_real_escape_string($connect,trim($_POST['day']));
            getDays($day);

            break;
        default :
            header("Location: ../booking.php?daysError");
            exit();
    }

    header("Location: ../booking.php?success");
    exit();

}else{
    header("Location: ../booking.php?fatalError");
    exit();
}

function getDays($dayInput){
    $daysOfWeek = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
    foreach ($daysOfWeek as $key => $value){
        if($dayInput == $value){
            return $dayInput;
        }
    }
    //return $day;
}