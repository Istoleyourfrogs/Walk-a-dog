<?php
//database variables
<<<<<<< HEAD
=======

>>>>>>> 937af662c60c3ca12afab86faf9e50cf3b84c140
/*
$database= "169.254.0.2:3306";
$user="spolnici_linolada";
$password="linolada123";
$dbname="spolnici_walkadog";
*/

$database= "localhost";
$user="root";
$password="";
$dbname="spolnici_walkadog";

//connects to the database
$connect = mysqli_connect($database,$user,$password,$dbname);
//if the connection was not successful redirect the user
if(!$connect){
    header("Location: https://walkadog.secondsection.in.rs/error404.php");
    die();
}
