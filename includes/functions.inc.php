<?php
require "database.inc.php";
//checks if the Input has a day in the week
function dayValidation($dayInput){
    $daysOfWeek = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
    if(!in_array($dayInput,$daysOfWeek)){
        header("Location: ../index.php?error=fatal#booking");
        exit();
    }
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
function validation($regex,$checkVaraible,$minLength,$error){
    if(!preg_match($regex, $checkVaraible) or strlen($checkVaraible)<$minLength){
        header("Location: ../index.php?$error");
        exit();
    }
}
function typeOfWalkSQL($connect,$tableContent,$tableValues){
    $sql = "INSERT INTO walks(".$tableContent.") VALUES (".$tableValues.");";
    $query = mysqli_query($connect,$sql);
}

function dogSQL($connect,$tableValues){
    $sql = "INSERT INTO dogs(owner_fk,name,age,breed,vaccinated,trained,aggression,other) VALUES (".$tableValues.");";
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
function dogValidation($connect,$dogName,$dogYear,$dogMonth,$dogBreed,$dogVaccinated,$dogTrained,$dogAggression,$dogOther){
    //checks if dogs name is empty or if both of the age inputs are empty
    if(empty($dogName) or (empty($dogYear) and empty($dogMonth))){
        header("Location: ../index.php?error=empty#booking");
        exit();
    }
    //checks for only letter in the dogs name
    if(!preg_match("/^[a-zA-Z\s]*$/",$dogName)){
        header("Location: ../index.php?error=notValid#booking");
        exit();
    }
    //checks the dogs age in years (format from 1-29)
    if(!preg_match("/^(1[0-9]{0,1}|2[0-9]{0,1}|[0-9]{1})?$/",$dogYear)){
        header("Location: ../index.php?error=notValid#booking");
        exit();
    }
    //checks the dogs age in months (format from 1-11)
    if(!preg_match("/^[0-9]{0,3}?$/",$dogMonth)){
        header("Location: ../index.php?error=notValid#booking");
        exit();
    }

    $sql = "SELECT breed FROM breeds WHERE breed='$dogBreed';";
    $query = mysqli_query($connect,$sql);
    //checks if the breed is valid by getting it from the database
    if($row = mysqli_num_rows($query) == 0){
        header("Location: ../index.php?error=fatalError#booking");
        exit();
    }
    //checks if the value of vaccinated is either none or 1
    if($dogVaccinated != '' and $dogVaccinated != '1'){
        header("Location: ../index.php?error=fatalError#booking");
        exit();
    }
    //checks if the value of trained is either none or 1
    if($dogTrained != '' and $dogTrained != '1'){
        header("Location: ../index.php?error=fatalError#booking");
        exit();
    }
    //checks if the value of aggression is either none or 1
    if($dogAggression != '' and $dogAggression != '1'){
        header("Location: ../index.php?error=fatalError#booking");
        exit();
    }
    if(!preg_match("/^[a-zA-Z0-9\.!?,\-\(\):_\s]*$/",$dogOther)){
        header("Location: ../index.php?error=notValid#booking");
        exit();
    }
    //echo $dogName." ".$dogYear." ".$dogMonth." ".$dogBreed." ".$dogVaccinated." ".$dogTrained." ".$dogAggression." ".$dogOther."<br>";

}
function ageCalculator($dogYear,$dogMonth){
    $dogYear *= 12;
    $dogAge = $dogYear + $dogMonth;
    return $dogAge;
}
function checkBoxValue($value){
    if($value == 1){
        $value = 1;
        return $value;
    }else
        $value = 0;
        return $value;
}
