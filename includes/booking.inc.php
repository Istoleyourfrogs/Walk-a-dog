<?php
require "database.inc.php";
require "functions.inc.php";
if(isset($_POST['submit'])){
/***************************************************OWNER SECTION*********************************************************/


    foreach($_POST as $key => $value) {
        ${$key} = mysqli_real_escape_string($connect,trim($value));
    }
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
    validation("/^[a-zA-Z0-9\/\s]*$/",$address,5,"addressError");
    //checks for only numbers and if it begins with +381 or if the length is shorter than 9
    validation("/^\+381\s[0-9\/-]*$/",$phone,9,"phoneError");
    //checks if the walks are /oneTime|daily|weekly/
    validation("/^(oneTime|daily|weekly)$/",$typeOfWalk,0,"walkError");

    //depended on the type of walk checks for error in the appropriate fields
    switch ($typeOfWalk){
        case "oneTime":
            //checks if date and time are empty
            if(empty($date) or empty($time)){
                header("Location: ../booking.php?oneTimeEmpty");
                exit();
            }
            //checks if the format of date and time is valid
            if(!dateValidation($date) or !timeValidation($time)){
                header("Location: ../booking.php?dateOrTimeNotValid");
                exit();
            }
            //if the day is not empty display fatal Error
            if(!empty($day)){
                header("Location: ../booking.php?dayFatalError");
                exit();
            }
            break;

        case "daily":
            //checks if the time is empty
            if(empty($time)){
                header("Location: ../booking.php?dailyEmpty");
                exit();
            }
            //validates the time based on the format xx:xx
            validation("/^(0[0-9]|1[0-9]|2[0-3])\:[0-5][0-9]$/",$time,0,"timeFatalError");
            //if either date or day are not empty display Error
            if(!empty($date) or !empty($day)){
                header("Location: ../booking.php?dateOrDayNotEmpty");
                exit();
            }
            break;

        case "weekly":
            //checks if the day or time are empty
            if(empty($day) or empty($time)){
                header("Location: ../booking.php?weeklyEmpty");
                exit();
            }
            //validates the time based on the format xx:xx
            validation("/^(0[0-9]|1[0-9]|2[0-3])\:[0-5][0-9]$/",$time,0,"timeFatalError");
            //validates the day
            dayValidation($day);
            //checks if the date is not empty and displays Error
            if(!empty($date)){
                header("Location: ../booking.php?dateNotEmpty");
                exit();
            }
            break;

        default :
            //if none of the above cases were executed redirect with an Error
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
    /***************************************************OWNER SECTION*******************************************************/


    /***************************************************DOG SECTION*********************************************************/

    if(empty($numberOfDogs)){
        header("Location: ../booking.php?noDogs");
        exit();
    }
    if(!preg_match("/^(1|2|3)$/",$numberOfDogs)){
        header("Location: ../booking.php?dogNumberNotMatching");
        exit();
    }
    $dogNumber = ["One","Two","Three"];
    for($i=0; $i<$numberOfDogs; $i++){
        dogValidation(
            $connect,
            ${"dogName".$dogNumber[$i]},
            ${"dogYear".$dogNumber[$i]},
            ${"dogMonth".$dogNumber[$i]},
            ${"dogBreed".$dogNumber[$i]},
            ${"dogVaccinated".$dogNumber[$i]},
            ${"dogTrained".$dogNumber[$i]},
            ${"dogAggression".$dogNumber[$i]},
            ${"dogOther".$dogNumber[$i]}
        );
    }
    /***************************************************\/DOG SECTION\/*********************************************************/

    //capitalize the first letter of each word for $name
    $name = ucwords(strtolower($firstName." ".$lastName));
    $address = ucwords(strtolower($address));
    //replaces the - and / in the phone number with an empty string
    $phone = str_replace(array('/','-'),"",$phone);
    //generates random string of character(20) sets status(free walk) to 1 and verified to 0
    $code = generateCode();
    $code = mysqli_real_escape_string($connect,trim($code));
    $status = 1;
    $verified = 0;


    //INSERT INTO TABLE USERS
    $sql = "INSERT INTO users(name,email,address,phone,status,verified,code) VALUES ('$name','$email','$address','$phone',$status,$verified,'$code');";
    $query = mysqli_query($connect,$sql);

    //combine date and time to write to the database
    if(!empty($date) and !empty($time)){
        $dateTime = $date." ".$time;
    }
    //gets the user_id from the database
    $userID = getUserID($connect,$code);

    switch ($numberOfDogs){
        case "1":
            dogSQL($connect,"$userID,'$dogNameOne',$dogAgeOne,'$dogBreedOne',$dogVaccinatedOne,$dogTrainedOne,$dogAggressionOne,'$dogOtherOne'");
            break;
        case "2":
            dogSQL($connect,"$userID,'$dogNameOne','$dogAgeOne','$dogBreedOne','$dogVaccinatedOne','$dogTrainedOne','$dogAggressionOne','$dogOtherOne'");
            dogSQL($connect,"$userID,'$dogNameTwo','$dogAgeTwo','$dogBreedTwo','$dogVaccinatedTwo','$dogTrainedTwo','$dogAggressionTwo','$dogOtherTwo'");
            break;
        case "3":
            dogSQL($connect,"$userID,'$dogNameOne','$dogAgeOne','$dogBreedOne','$dogVaccinatedOne','$dogTrainedOne','$dogAggressionOne','$dogOtherOne'");
            dogSQL($connect,"$userID,'$dogNameTwo','$dogAgeTwo','$dogBreedTwo','$dogVaccinatedTwo','$dogTrainedTwo','$dogAggressionTwo','$dogOtherTwo'");
            dogSQL($connect,"$userID,'$dogNameThree','$dogAgeThree','$dogBreedThree','$dogVaccinatedThree','$dogTrainedThree','$dogAggressionThree','$dogOtherThree'");
            break;
        default:

    }
    //depended on the $typeOfWalk inserts the correct data into the database
    switch($typeOfWalk){
        case "oneTime":
            typeOfWalkSQL($connect,"user_fk,type,one_time_walk","$userID,'$typeOfWalk','$dateTime'");
            break;
        case "daily":
            typeOfWalkSQL($connect,"user_fk,type,daily_walk_time","$userID,'$typeOfWalk','$time'");
            break;
        case "weekly":
            typeOfWalkSQL($connect,"user_fk,type,weekly_walk_day,weekly_walk_time","$userID,'$typeOfWalk','$day','$time'");
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