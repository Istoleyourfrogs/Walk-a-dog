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
function dogValidation($connect,$dogName,$dogYear,$dogMonth,$dogBreed,$dogVaccinated,$dogTrained,$dogAggression,$dogOther){

    if(empty($dogName) or (empty($dogYear) and empty($dogMonth))){
        header("Location: ../booking.php?emptyNameOrAge");
        exit();
    }
    if(!preg_match("/^[a-zA-Z0-9\/\s]*$/",$dogName)){
        header("Location: ../booking.php?notValidName");
        exit();
    }
    if(!preg_match("/^(1[0-9]{0,1}|2[0-9]{0,1}|[0-9]{1})$/",$dogYear)){
        header("Location: ../booking.php?YearNotGood");
        exit();
    }
    if(!preg_match("/^([0-9]{1}|1[0-1]{1})$/",$dogMonth)){
        header("Location: ../booking.php?MonthNotGood");
        exit();
    }
    $sql = "SELECT breed FROM breeds WHERE breed='$dogBreed';";
    $query = mysqli_query($connect,$sql);
    if($row = mysqli_num_rows($query) < 1){
        header("Location: ../booking.php?BreedError");
        exit();
    }
    if($dogVaccinated != 0 or $dogVaccinated != 1){
        header("Location: ../booking.php?VaccinatedError");
        exit();
    }
    if($dogTrained != 0 or $dogTrained != 1){
        header("Location: ../booking.php?TrainedError");
        exit();
    }
    if($dogAggression != 0 or $dogTrained != 1){
        header("Location: ../booking.php?TrainedError");
        exit();
    }
    if(!preg_match("/^[a-zA-Z\.!?,\-\(\)]*$/",$dogOther)){
        header("Location: ../booking.php?OtherSectionError");
        exit();
    }
    return  $dogName;
}
/*
function dogNumberValidaton($connect,$numberOfDogs){
    switch($numberOfDogs){
        case "1":
            $dogNameFirst = mysqli_real_escape_string($connect,trim($_POST['dogNameOne']));
            $dogYearFirst = mysqli_real_escape_string($connect,trim($_POST['dogYearOne']));
            $dogMonthFirst  = mysqli_real_escape_string($connect,trim($_POST['dogMonthOne']));
            $dogBreedFirst = mysqli_real_escape_string($connect,trim($_POST['dogBreedOne']));
            $dogVaccinatedFirst = mysqli_real_escape_string($connect,trim($_POST['dogVaccinatedOne']));
            $dogTrainedFirst = mysqli_real_escape_string($connect,trim($_POST['dogTrainedOne']));
            $dogAggressionFirst = mysqli_real_escape_string($connect,trim($_POST['dogAggressionOne']));
            $dogOtherFirst = mysqli_real_escape_string($connect,trim($_POST['dogOtherOne']));
            dogValidation($connect,$dogNameFirst,$dogYearFirst,$dogMonthFirst,$dogBreedFirst,$dogVaccinatedFirst,$dogTrainedFirst,$dogAggressionFirst,$dogOtherFirst);
            $sql=

    }
}*/
