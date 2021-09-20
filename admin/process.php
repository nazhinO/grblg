<?php

if(isset($_POST['submit'])){

	require_once('../database/connect.php');
	//mysqli_real_escape_string(); for security purposes later
	$title = mysqli_real_escape_string($conn, $_POST['article_title']);
	$content = mysqli_real_escape_string($conn, $_POST['article_content']);

	if(!empty($title) || !empty($content)){

		$sql = "INSERT INTO article(article_title, article_content, user_ID) VALUES('$title', '$content', '21');";
		$execute = mysqli_query($conn, $sql);

		if(!$execute){
			echo "Failed to submit the data";
			exit();
		}else{
			header('refresh:3; url=dashboard.php');
			echo "Articled published successfully!";
			exit();
		}

	}else{
		header('Location:dashboard.php?emptyFields');
		exit();
	}


}else{
	header('Location:dashboard.php?invalidRequest');
	exit();
}

?>