<?php 

session_start();

if(isset($_GET['del_ID'])){
	require_once("./dbh.inc.php");

	 $auth_id = mysqli_real_escape_string($conn, $_GET['del_ID']);

	$sql = "DELETE FROM post WHERE postID='$auth_id';";
	$execute = mysqli_query($conn, $sql);

	if(!$execute){
		header('refresh:3; url= ../pages/manage-post.php');
		echo "Failed to delete post.";
		exit();
	}else{
		header('refresh:3; url=../pages/manage-post.php');
		echo "Post has been successfully deleted!";
		exit();
	}
}
else{
	header('refresh:3; url=../pages/manage-post.php');
	echo "Unknown Error!";
	exit();
}