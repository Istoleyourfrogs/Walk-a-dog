<?php
session_start();
if(isset($_POST['submit'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if(empty($username) or empty($password)){
        header("Location: ../admin.php?login=empty");
        exit();
    }
    if(!preg_match("/^[a-zA-Z]*$/", $username) or !preg_match("/^[a-zA-Z]*$/", $password)){
        header("Location: ../admin.php?login=char");
        exit();
    }
    if($username === 'lukaku' and $password === 'gaku'){

        $_SESSION['username'] = $username;
        header("Location: ../admin.php?login=success");
        exit();

    }
        header("Location: ../admin.php?login=error");
        exit();
}else{
    header("Location ../admin.php?login=fatalError");
}