<?php
require "database.inc.php";
$myFile = "breeds.txt";
$lines = file($myFile);//file in to an array

foreach($lines as $key => $value) {
    $sql = "INSERT INTO breeds(breed) VALUES('$value');";
    $query = mysqli_query($connect,$sql);
}
