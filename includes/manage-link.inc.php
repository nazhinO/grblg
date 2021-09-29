<?php
session_start();

if(isset($_GET['submit'])){

	require_once('./dbh.inc.php');
	$instagram = mysqli_real_escape_string($conn, $_GET['instagram']);
	$twitter = mysqli_real_escape_string($conn,$_GET['twitter']);
	$facebook = mysqli_real_escape_string($conn,$_GET['facebook']);
	//$thumbnail = mysqli_real_escape_($conn, $_POST['thumbnail']);

	if(!empty($instagram) || !empty($twitter) || !empty($facebook)){

		$sql = "UPDATE `link` SET `linkInstagram` = '$instagram', `linkTwitter` = '$twitter', `linkFacebook` = '$facebook' WHERE `linkID` = 1;";


		$execute = mysqli_query($conn, $sql);

		if(!$execute){
			header('refresh:3; url= ../pages/manage-link.php');
			echo "Failed to update the links";
			exit();
		}else{
			header('refresh:3; url=../pages/manage-link.php');
			echo "Links successfully updated!";
			exit();
		}
		

	}else{
		header('Location:../pages/manage-link.php?emptyFields');
		exit();
	}


}else{
	header('Location:../pages/manage-link.php?invalidRequest');
	exit();
}



