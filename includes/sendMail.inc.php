<?php

require "database.inc.php";
if(isset($_POST['submit'])) {
    $txt = $_POST['txt'];
    $subject = $_POST['subject'];
    if(empty($txt) or empty($subject)){
        header("Location: ../admin.php?mail=error");
        exit();
    }
    $sql = "SELECT mail,hashedMail FROM mail";
    $query = mysqli_query($connect, $sql);

    while ($result = mysqli_fetch_assoc($query)) {

        $txt = $_POST['txt'];
        $txt .= "<a href=\"https://walkadog.secondsection.in.rs/includes/unsubscribe.inc.php?key={$result['hashedMail']}\">Unsubscribe</a>";
        $subject = $_POST['subject'];
        $to = $result['mail'];
        /*$txt = "<html>
        <h1>Thank you for subscribing</h1>
        <a href=\"https://walkadog.secondsection.in.rs/includes/unsubscribe.inc.php?key={$result['hashedMail']}\">Unsubscribe</a>
    ";*/
        $headers = "From:  walk·a·dog <walkadog@secondsection.in.rs>" . " \r\n" .
            $headers .= 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

        mail($to, $subject, $txt, $headers);

        $to = '';
        $subject = '';
        $txt = '';
        $headers = '';


    }
    header("Location: ../admin.php?mail=success");
    exit();

}

