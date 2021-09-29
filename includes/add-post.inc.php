<?php
session_start();

if(isset($_POST['submit'])){

	require_once('./dbh.inc.php');
	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$content = mysqli_real_escape_string($conn, $_POST['content']);
	//$thumbnail = mysqli_real_escape_($conn, $_POST['thumbnail']);

	if(!empty($title) || !empty($content) || !empty($_FILES["image"]["name"])){
		//session_start();

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
				echo "Failed to submit the data";
				echo "Image probably is too large";
				exit();
			}else{
				header('refresh:3; url=../pages/add-post.php');
				echo "Articled published successfully!";
				exit();
			}
		}else{ 
            echo "Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload."; 
        } 

	}else{
		header('Location:./pages/add-post.php?emptyFields');
		exit();
	}


}else{
	header('Location:./pages/add-post.php?invalidRequest');
	exit();
}

