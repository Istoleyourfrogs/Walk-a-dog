<?php
require "database.inc.php";
if(isset($_POST['submit'])){
    $first = mysqli_real_escape_string($connect,trim($_POST['first']));
    $last = mysqli_real_escape_string($connect,trim($_POST['last']));
    $address = mysqli_real_escape_string($connect,trim($_POST['address']));
    $pussy = mysqli_real_escape_string($connect,trim($_POST['pussy']));
    if(empty($first) or empty($last)){
        header("Location: ../form.php?send=first");
        exit();
    }
    if($pussy === "on"){
        $pussy = 1;
    }
    if(empty($pussy)){
        $pussy = 0;
    }
    if(!preg_match("/^[a-zA-Z]*$/", $first) or !preg_match("/^[a-zA-Z]*$/", $last)){
        header("Location: ../form.php?send=last");
        exit();
    }

    $sql = "INSERT INTO KKK(KKK_Member_Name,KKK_Member_Last_Name,KKK_Member_Adress,KKK_Member_Pussy) VALUES('$first','$last','$address','$pussy');";
    mysqli_query($connect,$sql);
    header("Location: ../form.php?send=success");

    echo $pussy;
}else{
    echo "not connected";
}
