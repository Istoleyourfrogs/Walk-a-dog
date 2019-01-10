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
        header("Location: ../index.php?error=empty#booking");
        exit();
    }
    //checks for only letters in firstName and lastName or if the length is shorter than 2
    validation("/^[a-zA-Z\s]*$/",$lastName,2,"error=notValid#booking");
    validation("/^[a-zA-Z\s]*$/",$firstName,2,"error=notValid#booking");
    //checks if the email has a valid format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../index.php?error=notValid#booking");
        exit();
    }
    //checks if the address has letters,numbers,spaces and a / or if the length is shorter than 5
    validation("/^[a-zA-Z0-9\/\s]*$/",$address,5,"error=notValid#booking");
    //checks for only numbers and if it begins with +381 or if the length is shorter than 9
    validation("/^\+381\s[0-9\/-]*$/",$phone,9,"error=notValid#booking");
    //checks if the walks are /oneTime|daily|weekly/
    validation("/^(oneTime|daily|weekly)$/",$typeOfWalk,0,"error=notValid#booking");

    //depended on the type of walk checks for error in the appropriate fields
    switch ($typeOfWalk){
        case "oneTime":
            //checks if date and time are empty
            if(empty($date) or empty($time)){
                header("Location: ../index.php?error=empty#booking");
                exit();
            }
            //checks if the format of date and time is valid
            /*if(!dateValidation($date) or !timeValidation($time)){
                header("Location: ../index.php?error=notValid#booking");
                exit();
            }*/
            validation("/^2[0-9]{3}\-(0[1-9]|1[0-2])\-(0[1-9]|1[0-9]|2[0-9]|3[0-1])$/",$date,0,"error=notValid#booking");
            validation("/^(0[0-9]|1[0-9]|2[0-3])\:[0-5][0-9]$/",$time,0,"error=notValid#booking");
            //if the day is not empty display fatal Error
            if(!empty($day)){
                header("Location: ../index.php?error=fatal#booking");
                exit();
            }
            break;

        case "daily":
            //checks if the time is empty
            if(empty($time)){
                header("Location: ../index.php?error=empty#booking");
                exit();
            }
            //validates the time based on the format xx:xx
            validation("/^(0[0-9]|1[0-9]|2[0-3])\:[0-5][0-9]$/",$time,0,"error=notValid#booking");
            //if either date or day are not empty display Error
            if(!empty($date) or !empty($day)){
                header("Location: ../index.php?error=fatal#booking");
                exit();
            }
            break;

        case "weekly":
            //checks if the day or time are empty
            if(empty($day) or empty($time)){
                header("Location: ../index.php?error=empty#booking");
                exit();
            }
            //validates the time based on the format xx:xx
            validation("/^(0[0-9]|1[0-9]|2[0-3])\:[0-5][0-9]$/",$time,0,"error=fatal#booking");
            //validates the day
            dayValidation($day);
            //checks if the date is not empty and displays Error
            if(!empty($date)){
                header("Location: ../index.php?error=fatal#booking");
                exit();
            }
            break;

        default :
            //if none of the above cases were executed redirect with an Error
            header("Location: ../index.php?error=fatal#booking");
            exit();
    }

    //checks if there is an email already in the database
    $sql = "SELECT email,name FROM users WHERE email='$email';";
    $query = mysqli_query($connect,$sql);
    if(mysqli_num_rows($query) > 0 ){
        header("Location: ../index.php?error=registered#booking");
        exit();
    }
    /***************************************************OWNER SECTION*******************************************************/


    /***************************************************DOG SECTION*********************************************************/

    if(empty($numberOfDogs)){
        header("Location: ../index.php?error=empty#booking");
        exit();
    }
    /*if(!preg_match("/^(1|2|3)$/",$numberOfDogs)){
        header("Location: ../index.php?error=fatal#booking");
        exit();
    }*/
    validation("/^(1|2|3)$/",$numberOfDogs,0,"error=fatal#booking");
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
        ${"dogAge".$dogNumber[$i]} = ${"dogYear".$dogNumber[$i]} * 12 +  ${"dogMonth".$dogNumber[$i]};
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
    //combine date and time to write to the database
    if(!empty($date) and !empty($time)){
        $dateTime = $date." ".$time;
    }

    //INSERT INTO TABLE USERS
    $sql = "INSERT INTO users(name,email,address,phone,status,verified,code) VALUES ('$name','$email','$address','$phone',$status,$verified,'$code');";
    if(!$query = mysqli_query($connect,$sql)){
        header("Location: index.php?error=fatal#booking");
        exit();
    }

    //gets the user_id from the database
    $userID = getUserID($connect,$code);
    /*for($i=0; $i<$numberOfDogs; $i++){
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
        ${"dogAge".$dogNumber[$i]} = ${"dogYear".$dogNumber[$i]} * 12 +  ${"dogMonth".$dogNumber[$i]};
    }*/
    //will do it like this!
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
            header("Location: ../index.php?oopsDatabaseError");
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

    header("Location: ../index.php?error=success#booking");
    exit();

}else{
    header("Location: ../index.php?error=fatal#booking");
    exit();
}