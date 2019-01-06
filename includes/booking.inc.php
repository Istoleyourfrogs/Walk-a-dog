<?php
require "database.inc.php";
require "functions.inc.php";
if(isset($_POST['submit'])){
/***************************************************OWNER SECTION*********************************************************/
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
    if(!preg_match("/^[a-zA-Z\s]*$/", $firstName) or !preg_match("/^[a-zA-Z\s]*$/", $lastName) or strlen($firstName)<2 or strlen($lastName)<2) {
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

    //checks if there is an email already in the database
    $sql = "SELECT email,name FROM users WHERE email='$email';";
    $query = mysqli_query($connect,$sql);
    if(mysqli_num_rows($query) > 0 ){
        header("Location: ../booking.php?alreadyRegistered");
        exit();
    }
/***************************************************OWNER SECTION*********************************************************/


/***************************************************DOG SECTION*********************************************************/

    $numberOfDogs = mysqli_real_escape_string($connect,trim($_POST['numberOfDogs']));
    if(empty($numberOfDogs)){
        header("Location: ../booking.php?noDogs");
        exit();
    }
    if(!preg_match("/^(1|2|3)$",$numberOfDogs)){
        header("Location: ../booking.php?dogNumberNotMatching");
        exit();
    }

    //capitalize the first letter of each word for $name
    $name = $firstName." ".$lastName;
    $name = ucwords($name);
    $address = ucwords($address);
    //generates random string of character(20) sets status(free walk) to 1 and verified to 0
    $code = generateCode();
    mysqli_real_escape_string($connect,trim($code));
    $status = 1;
    $verified = 0;


    //INSERT INTO TABLE USERS
    $sql = "INSERT INTO users(name,email,address,phone,status,verified,code) VALUES ('$name','$email','$address','$phone',$status,$verified,'$code');";
    $query = mysqli_query($connect,$sql);
    //combine date and time to write to the database
    if(!empty($date) and !empty($time)){
        $dateTime = $date." ".$time;
    }
    switch($typeOfWalk){
        case "oneTime":
            $userID = getUserID($connect,$code);
            $sql = "INSERT INTO walks(user_fk,type,one_time_walk) VALUES ($userID,'$typeOfWalk','$dateTime');";
            $query = mysqli_query($connect,$sql);
            break;
        case "daily":
            $userID = getUserID($connect,$code);
            $sql = "INSERT INTO walks(user_fk,type,daily_walk_time) VALUES ($userID,'$typeOfWalk','$time');";
            $query = mysqli_query($connect,$sql);
            break;
        case "weekly":
            $userID = getUserID($connect,$code);
            $sql = "INSERT INTO walks(user_fk,type,weekly_walk_day,weekly_walk_time) VALUES ($userID,'$typeOfWalk','$day','$time');";
            $query = mysqli_query($connect,$sql);
            break;
        default:
            header("Location: ../booking.php?oopsDatabaseError");
            exit();
    }
    //SEND VERIFICATION EMAIL
    $to = $email;
    $subject = "VERIFY";
    $txt = "<html>
    Verify your request<a href=\"https://walkadog.secondsection.in.rs/includes/verification.inc.php?code=$code\">Verify</a> ";
    $headers = "From:  walk·a·dog <walkadog@secondsection.in.rs>" . " \r\n" .
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    mail($to,$subject,$txt,$headers);

    header("Location: ../booking.php?success");
    exit();

}else{
    header("Location: ../booking.php?fatalError");
    exit();
}

