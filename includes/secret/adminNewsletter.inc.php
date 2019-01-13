<?php
require "../database.inc.php";

if(isset($_POST['submit'])) {
    //setting all variables from the newsletter form
    $mailFrom = mysqli_real_escape_string($connect,trim($_POST['email']));
    $empty = $_POST['hidden'];
    $hashedMail = md5($mailFrom);
    //gets the email from the database if there is any
    $sql = "SELECT * FROM newsletter WHERE mail='$mailFrom';";
    $query = mysqli_query($connect,$sql);
    $result = mysqli_fetch_assoc($query);
    $mailCheck = $result['mail'];
    //if the hidden input is not empty display error
    if(!empty($empty)){
        header("Location: ../../admin.php?mail=fatalError#newsletter");
        exit();
    }
    //if the input is empty display error
    if(empty($mailFrom)){
        header("Location: ../../admin.php?mail=error#newsletter");
        exit();
    }
    //if there is a mail in the database return back with an error
    if($mailCheck == $mailFrom) {
        header("Location: ../../admin.php?mail=same#newsletter");
        exit();
    }
    //validating an email
    if(!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)){
        header("Location: ../../admin.php?mail=mail#newsletter");
        exit();
    }
    //inserting the email into the database
    $sql = "INSERT INTO newsletter(mail,hashedMail) VALUES ('$mailFrom','$hashedMail');";
    $query = mysqli_query($connect,$sql);

    header("Location: ../../admin.php?mail=success#newsletter");
    exit();

}else{
    header("Location: ../../admin.php?mail=fatalError#newsletter");
    exit();
}