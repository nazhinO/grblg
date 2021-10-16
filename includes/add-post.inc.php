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
				header('location: ../pages/add-post.php?error=stmtfailed');
				exit();
			}else{
				header('location: ../pages/add-post.php?error=none');
				exit();
			}

		}else{
			header('location: ../pages/add-post.php?error=invalidthumbnail');
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
// session_start();

// if(isset($_POST['submit'])){
// 	require_once './dbh.inc.php';

// 	$title = mysqli_real_escape_string($conn, $_POST['title']);
// 	$content = mysqli_real_escape_string($conn, $_POST['content']);
// 	$thumbnail = $_FILES['image'];
// 	$author = $_SESSION['userID'];
	
// 	require_once './function.inc.php';

// 	if(emptyInputPost($title, $content, $thumbnail) !== false){
// 		header("location: ../pages/add-post.php?error=emptyinput");
// 		exit();
// 	}
// 	if(!empty($_FILES['image']['name'])){
// 		//get file info
// 		$fileName = basename($_FILES["image"]["name"]); 
// 		$fileType = pathinfo($fileName, PATHINFO_EXTENSION);

// 		//allow certain file formats
// 		$allowTypes = array('jpg','png','jpeg','gif');

// 		if(in_array($fileType, $allowTypes)){ 
// 			$image = $_FILES['image']['tmp_name']; 
// 			$imgContent = addslashes(file_get_contents($image)); 
		
// 			addPost($conn, $title, $content, $imgContent, $author);
// 		}else{
// 			header("location: ../pages/add-post.php?error=invalidthumbnail");
// 			exit();
// 		}
// 	}
	

// }else{
// 	header('Location:../pages/add-post.php?error=unexpectederror');
// 	exit();
// }

