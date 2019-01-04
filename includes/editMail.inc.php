<?php
require "database.inc.php";
//if the form has been submitted by the update button
if(isset($_POST['update'])){
    //enterer and a new email adress
    $id = mysqli_real_escape_string($connect,trim($_POST['id']));
    $sql = "SELECT * FROM newsletter WHERE id=$id";
    $query = mysqli_query($connect,$sql);
    $result = mysqli_fetch_assoc($query);
    //sending to the same page where the new email will be sent to the database
        echo "<form method='post' action='editMail.inc.php'>
                <input type='hidden' name='id' value='$id'>
                <input type='text' name='mail' value='{$result['mail']}'>
                <button type='submit' name='submit'>Update</button>";
    exit();
}

if(isset($_POST['delete'])){
    //if the form has been submitted bt the delete button
    $delete = $_POST['delete'];
    $id = mysqli_real_escape_string($connect,trim($_POST['id']));
    //deleting the email from the database
    if($delete == 'delete'){
        $sql = "DELETE FROM newsletter WHERE id=$id;";
        $query = mysqli_query($connect,$sql);
        header("Location: ../admin.php");
        exit();
    }
    header("Location: ../admin.php");
    exit();
}
if(isset($_POST['submit'])){
    //updating the newsletter from the form above
    $id = mysqli_real_escape_string($connect,trim($_POST['id']));
    $mail = mysqli_real_escape_string($connect,trim($_POST['mail']));
    $hashedMail = md5($mail);
    $sql = "UPDATE newsletter SET mail='$mail',hashedMail='$hashedMail' WHERE id='$id';";
    $query = mysqli_query($connect,$sql);
    header("Location: ../admin.php");
    exit();

}