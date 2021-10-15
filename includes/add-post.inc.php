<?php
session_start();

if(isset($_POST['submit'])){

	require_once('./dbh.inc.php');
	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$content = mysqli_real_escape_string($conn, $_POST['content']);

	if(!empty($title) && !empty($content) && !empty($_FILES['image']['name'])){
		
		//get file info
		$fileName = basename($_FILES["image"]["name"]); 
		$fileType = pathinfo($fileName, PATHINFO_EXTENSION);

		//allow certain file formats
		$allowTypes = array('jpg','png','jpeg','gif');

		if(in_array($fileType, $allowTypes)){ 
			$image = $_FILES['image']['tmp_name']; 
			$imgContent = addslashes(file_get_contents($image)); 

			$sql = "INSERT INTO post(postTitle, postContent, image, postAuthor) VALUES('$title', '$content', '$imgContent', '".$_SESSION['userID']."');";

			$execute = mysqli_query($conn, $sql);

			if(!$execute){
				header('refresh:3; url= ../pages/add-post.php');
				echo "Failed to upload the data.<br />";
				echo "Thumbnails' size is probably too large.<br /><br />";
				echo "Please wait for a couple seconds.";
				echo "Redirecting back to page...<br />";
				exit();
			}else{
				header('refresh:3; url=../pages/add-post.php');
				echo "Articled published successfully!<br /><br />";
				echo "Please wait for a couple seconds.";
				echo "Redirecting back to page...<br />";
				exit();
			}

		}else{
			header('refresh:3; url=../pages/add-post.php');
            echo "Sorry, only JPG, JPEG, PNG, & GIF files are allowed to be uploaded.<br /><br />";
            echo "Please wait for a couple seconds.<br />";
        	echo "Redirecting back to page...<br />";
            exit();
        } 

	}else{
		header('Location:../pages/add-post.php?error=emptyinput');
		exit();
	}

}else{
	header('Location:../pages/add-post.php?error=unexpectederror');
	exit();
}