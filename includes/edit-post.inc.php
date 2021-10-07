<?php
session_start();

if(isset($_POST['submit'])){

	require_once('./dbh.inc.php');
	$id = mysqli_real_escape_string($conn, $_POST['ID']);
	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$content = mysqli_real_escape_string($conn, $_POST['content']);
	//$thumbnail = mysqli_real_escape_($conn, $_POST['thumbnail']);
	$postAuthor = $_SESSION['userID'];

	if(!empty($title) || !empty($content)){
		//session_start();
		if(!empty($_FILES["image"]["name"])){
			//get file info
			$fileName = basename($_FILES["image"]["name"]); 
			$fileType = pathinfo($fileName, PATHINFO_EXTENSION);

			//allow certain file formats
			$allowTypes = array('jpg','png','jpeg','gif');
		
			if(in_array($fileType, $allowTypes)){ 
				$image = $_FILES['image']['tmp_name']; 
				 $imgContent = addslashes(file_get_contents($image)); 

				 $sql = "UPDATE `post` SET `postTitle` = '$title', `postContent` = '$content', `image` = '$imgContent', `postAuthor` = '$postAuthor' WHERE `postID` = '$id';";
				 // $sql = "UPDATE `post` SET `postTitle` = '$title', `postContent` = '$content', `image` = '$imgContent', `postAuthor` = '".$_SESSION['userID']."' WHERE `postID` = '$id';";

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
        	$sql = "UPDATE `post` SET `postTitle` = '$title', `postContent` = '$content', `postAuthor` = '$postAuthor' WHERE `postID` = '$id';";

			$execute = mysqli_query($conn, $sql);

			if(!$execute){
				header('refresh:3; url= ../pages/add-post.php');
				echo "Failed to submit the data";
				exit();
			}else{
				header('refresh:3; url=../pages/add-post.php');
				echo "Articled published successfully!";
				exit();
			}
        }
    

			
		
	}else{
		header('Location:./pages/add-post.php?emptyFields');
		exit();
	}


}else{
	header('Location:./pages/add-post.php?invalidRequest');
	exit();
}

