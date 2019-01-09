<?php
require "database.inc.php";
$myFile = "breeds.txt";
$lines = file($myFile);//file in to an array
$lines = str_replace(array("\r","\n","\r\n"),'',$lines);
//$string = str_replace(array("\r", "\n"), '', $string);
foreach($lines as $key => $value) {
    $sql = "INSERT INTO breeds(breed) VALUES('$value');";
    $query = mysqli_query($connect,$sql);
    var_dump($value);
}
