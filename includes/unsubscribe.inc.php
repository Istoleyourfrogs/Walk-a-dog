<?php
require "database.inc.php";
if(isset($_GET['key'])){
    $hashedMail = $_GET['key'];
    $sql = "SELECT hashedMail FROM newsletter WHERE hashedMail = '$hashedMail';";
    $query = mysqli_query($connect,$sql);
    $result = mysqli_fetch_assoc($query);
    if($result['hashedMail'] == $hashedMail){
        $sql = "DELETE FROM newsletter WHERE hashedMail = '$hashedMail'";
        $query = mysqli_query($connect,$sql);
        echo "you are unsubscribe!";
    }else{
        echo "we cant find you in our database";
    }

}else{
    echo "Oops something went wrong!";
}