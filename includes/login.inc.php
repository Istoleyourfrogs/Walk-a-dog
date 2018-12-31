<?php
//starts the session for the admin
session_start();
if(isset($_POST['submit'])){
    //gets the username and password from the admin form
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    //checking if the fields are empty
    if(empty($username) or empty($password)){
        header("Location: ../admin.php?login=empty");
        exit();
    }
    //checking if the fields match the admin username and password
    if($username === 'lukaku' and $password === 'gaku'){

        $_SESSION['username'] = $username;
        header("Location: ../admin.php?login=success");
        exit();

    }
        header("Location: ../admin.php?login=error");
        exit();
}else{
    header("Location ../admin.php?login=fatalError");
    exit();
}