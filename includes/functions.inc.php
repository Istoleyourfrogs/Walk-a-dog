<?php
function dayValidation($dayInput){
    $daysOfWeek = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
    if(in_array($dayInput,$daysOfWeek)){
        return $dayInput;
    }
    return null;
}

function timeValidation($time){
    if(!preg_match("/^(0[0-9]|1[0-9]|2[0-3])\:[0-5][0-9]$/",$time)){
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

function generateCode(){
    $keyLength = 20;
    $string = "1234567890abcdefghijklmnopqrstuvwxyz!@%^*()_+[];',.*-";
    $randomString = substr(str_shuffle($string), 0,$keyLength);
    return $randomString;
}
function getUserID($connect,$code){
    $sql = "SELECT user_id FROM users WHERE code='$code';";
    $query = mysqli_query($connect,$sql);
    if($row = mysqli_fetch_assoc($query)){
        $userID = $row['user_id'];
    }
    return $userID;

}