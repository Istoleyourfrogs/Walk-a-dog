<?php

require "database.inc.php";

$sql = "SELECT mail,hashedMail FROM mail";
$query = mysqli_query($connect,$sql);

    while ($result = mysqli_fetch_assoc($query)) {

        $to = $result['mail'];
        trim($to);
        $subject = "Test";
        $txt = "<html>
        <h1>Thank you for subscribing</h1>
        <a href=\"https://walkadog.secondsection.in.rs/includes/unsubscribe.inc.php?key={$result['hashedMail']}\">Unsubscribe</a>
    ";
       $headers = "From:  walk·a·dog <wakadog@secondsection.in.rs>" . " \r\n" .
            $headers .= "Bcc: somebodyelse@example.com" . "\r\n";
        $headers .= 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

        echo "$to <br> $subject <br> $txt <br><br><br>";
        mail($to, $subject, $txt, $headers);

        $to = '';
        $subject = '';
        $txt = '';
        $headers = '';


    }



