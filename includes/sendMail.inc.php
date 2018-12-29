<?php
require "database.inc.php";
require "newsletter.inc.php";
$sql = "SELECT mail FROM mail";
$query = mysqli_query($connect,$sql);
$array = array();
while($row = mysqli_fetch_assoc($query)) {
    $array[] = $row['mail'];
}
$send = "";
for($i=0; $i<sizeof($array); $i++) {
    $send = "$send, $array[$i]";
}

$to = $send;
$subject = "Test";
$txt = "<html>
        <h1>Thank you for subscribig</h1>
        <a href=\"https://walkadog.secondsection.in.rs/includes/unsubscribe.inc.php?key=$hashedMail\">Unsubscribe</a>
";
$headers = "From:  walk·a·dog <wakadog@secondsection.in.rs>" . " \r\n" .
$headers .= "Bcc: somebodyelse@example.com" . "\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

if(mail($to,$subject,$txt,$headers,"-f your@email.here")){
    echo "success";
    echo $txt;
}