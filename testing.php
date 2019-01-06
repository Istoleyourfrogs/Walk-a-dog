<?php
if(isset($_POST['submit'])) {
    $time = timeValidation($_POST['time']);
    //$time = $_POST['time'];
    $date = dateValidation($_POST['date']);
    echo $time."<br>";
    echo $date;
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
?>
<form action="testing.php" method="post">
    <input type="text" name="date" value="">
    <input type="text" name="time" value="">
    <button type="submit" name="submit">Send</button>
</form>