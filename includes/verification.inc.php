<?php
require "database.inc.php";
if(isset($_GET['code'])){
    $code = $_GET['code'];
    //$sql = "DELETE FROM users WHERE code='$code';";
    $sql = "UPDATE users SET verified=1 WHERE code='$code';";
    $query = mysqli_query($connect,$sql);
    if($query){
        echo "verified!";
    }else{
        echo "idk if it works like this";
    }

}