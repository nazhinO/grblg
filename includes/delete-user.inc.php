<?php 

session_start();

if(isset($_GET['del_ID'])){
	require_once("./dbh.inc.php");

	 $auth_id = mysqli_real_escape_string($conn, $_GET['del_ID']);

	$sql = "DELETE FROM user WHERE userID='$auth_id';";
	$execute = mysqli_query($conn, $sql);

	if(!$execute){
		header('refresh:3; url= ../pages/manage-user.php');
		echo "Failed to delete the user. They have posted online which will affect the database if the user will be deleted.";
		exit();
	}else{
		header('refresh:3; url=../pages/manage-user.php');
		echo "User has been successfully deleted!";
		exit();
	}
}
else{
	header('refresh:3; url=../pages/manage-user.php');
	echo "Unknown Error!";
	exit();
}