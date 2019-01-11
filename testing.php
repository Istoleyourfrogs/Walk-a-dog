<?php
date_default_timezone_set('Europe/Belgrade');
if(isset($_POST['submit'])) {
    $dogOther = $_POST['dogOther'];
     if(!preg_match("/^[a-zA-Z0-9\.!?,@#:&%+_$*\"\-\(\):_\s\\\/]*$/",$dogOther)){
        header("Location: ../index.php?error=notValid#booking");
        exit();
    }
}
echo $dogOther

?>
<form action="testing.php" method="post">
    <input type="text" name="date" value="">
    <input type="text" name="time" value="">
    <textarea></textarea>
    <button type="submit" name="submit">Send</button>
</form>
<div>
  <?php
  echo $dogOther;
  ?>


</div>
<dv>
  <working></working>
</dv>
