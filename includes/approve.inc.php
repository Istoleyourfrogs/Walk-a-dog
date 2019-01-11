<?php
require 'database.inc.php';
if(isset($_POST['approve'])){
	$reviewID = $_POST['approve'];
	$sql = "UPDATE reviews SET verified=1 WHERE review_id='$reviewID';";
	$query = mysqli_query($connect,$sql);
	if(!$query){
		header("Location: ../admin.php?error");
		exit();
	}
	header("Location: ../admin.php?success");
	exit();

}
elseif(isset($_POST['delete'])){
	$reviewID = $_POST['delete'];
	$sql = "DELETE FROM reviews WHERE review_id='$reviewID';";
	$query = mysqli_query($connect,$sql);
	if(!$query){
		header("Location: ../admin.php?error");
		exit();
	}
	header("Location: ../admin.php?success");
	exit();
}else{
	header("Location: ../admin.php?fatalError");
}