<?php
require 'includes/database.inc.php';
require 'includes/functions.inc.php';

if(isset($_POST['submit'])) {
    //insert the data from the form
    foreach ($_POST as $key => $value) {
        ${$key} = mysqli_real_escape_string($connect,trim($value));
    }

    //checks if the code is valid
    $sql = "SELECT review_code,verification_code FROM users WHERE review_code = '$code';";
    $query = mysqli_query($connect,$sql);
    $result = mysqli_fetch_assoc($query);
    if($row = mysqli_num_rows($query) < 1){
        echo "not found";
    }
    //checks if the code is already used
    $sql = "SELECT review_id FROM reviews WHERE code_fk = '$code';";
    $query = mysqli_query($connect,$sql);
    if($row = mysqli_num_rows($query) > 0){
        echo "already in database";
    }
    //inserts the comment in the database
    $userID = getUserID($connect,$result['verification_code']);
    $sql = "INSERT INTO reviews(code_fk,comment) VALUES ('$userID','$comment');";
    $query = mysqli_query($connect,$sql);
}
?>

<form action="testing.php" method="post">
    <label>CODE</label>
    <input type="text" name="code" value="">
    <label>COMMENT</label>
    <textarea name="comment"></textarea>
    <button type="submit" name="submit">Send</button>
</form>


