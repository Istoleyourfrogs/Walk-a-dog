<?php
date_default_timezone_set('Europe/Belgrade');
if(isset($_POST['submit'])) {
    $time =$_POST['time'];
    //$time = $_POST['time'];
    $date = $_POST['date'];
    echo $time."<br>";
    echo $date;
}
echo phpinfo();
echo $date = date('Y-m-d')."<br>";
echo $time = date("h:i");

?>
<form action="testing.php" method="post">
    <input type="text" name="date" value="">
    <input type="text" name="time" value="">
    <button type="submit" name="submit">Send</button>
</form>
<div>
  Hello my name is


</div>
<dv>
  <working></working>
</dv>
