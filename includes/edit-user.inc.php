<?php
session_start();

if(isset($_POST['submit'])){

	require_once('./dbh.inc.php');
	$id = mysqli_real_escape_string($conn, $_POST['ID']);
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$alias = mysqli_real_escape_string($conn, $_POST['alias']);
	//$thumbnail = mysqli_real_escape_($conn, $_POST['thumbnail']);

	if(!empty($name) || !empty($alias)){
			$sql = "UPDATE `user` SET `userName` = '$name', `userAlias` = '$alias' WHERE `userID` = '$id;";

			$execute = mysqli_query($conn, $sql);

			if(!$execute){
				header('refresh:3; url= ../pages/manage-user.php');
				echo "Failed to submit the data";
				exit();
			}else{
				header('refresh:3; url=../pages/manage-user.php');
				echo "User has been successfully updated!";
				exit();
			}
		

	}else{
		header('Location:./pages/manage-user.php?emptyFields');
		exit();
	}


}else{
	header('Location:./pages/manage-user.php?invalidRequest');
	exit();
}

