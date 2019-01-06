<?php
//checks if the Input has a day in the week
function dayValidation($dayInput){
    $daysOfWeek = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
    if(in_array($dayInput,$daysOfWeek)){
        return $dayInput;
    }
    return null;
}
//validates the time
function timeValidation($time){
    if(!preg_match("/^(0[0-9]|1[0-9]|2[0-3])\:[0-5][0-9]$/",$time)){
        return null;
    }else{
        return $time;
    }
}
//validates the date
function dateValidation($date){
    if(!preg_match("/^2[0-9]{3}\-(0[1-9]|1[0-2])\-(0[1-9]|1[0-9]|2[0-9]|3[0-1])$/",$date)){
        return null;
    }else{
        return $date;
    }
}
//generates a random string of 20 characters
function generateCode(){
    $keyLength = 20;
    $string = "1234567890abcdefghijklmnopqrstuvwxyz!@^*()_[];,.";
    $randomString = substr(str_shuffle($string), 0,$keyLength);
    return $randomString;
}
//gets the user_id from the table users
function getUserID($connect,$code){
    $sql = "SELECT user_id FROM users WHERE code='$code';";
    $query = mysqli_query($connect,$sql);
    if($row = mysqli_fetch_assoc($query)){
        $userID = $row['user_id'];
    }
    return $userID;

}
//validates variables
function validation($regex,$checkVaraible,$maxLength,$error){
    if(!preg_match($regex, $checkVaraible) or strlen($checkVaraible)<$maxLength){
        header("Location: ../booking.php?$error");
        exit();
    }
}
function typeOfWalkSQL($connect,$tableContent,$tableValues){
    $sql = "INSERT INTO walks(".$tableContent.") VALUES (".$tableValues.");";
    $query = mysqli_query($connect,$sql);
}
function mailValidation($empty,$mailFrom,$mailCheck,$location){
    //if the hidden input is not empty display error
    if (!empty($empty)) {
        header("Location: ../index.php?mail=fatalError#$location");
        exit();
    }
    //if the input is empty display error
    if (empty($mailFrom)) {
        header("Location: ../index.php?mail=error#$location");
        exit();
    }
    //if there is a mail in the database return back with an error
    if ($mailCheck == $mailFrom) {
        header("Location: ../index.php?mail=same#$location");
        exit();
    }
    //validating an email
    if (!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../index.php?mail=mail#$location");
        exit();
    }
}
function sendMail(){

}