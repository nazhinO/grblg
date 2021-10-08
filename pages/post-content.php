<?php
	if(isset($_GET['postID'])){
		require_once('../includes/dbh.inc.php');

		$auth_id = mysqli_real_escape_string($conn, $_GET['postID']);
		$sql = "SELECT * FROM post WHERE postID = $auth_id;";
		$execute = mysqli_query($conn, $sql);
		$post = mysqli_fetch_assoc($execute);

// $auth_id == $post['ID']
		if($post > 0){ 
		?>	
<?php
  $title = $post['postTitle'];
  include_once("./header.php");
?>


			<img class="post-image" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($post['image']); ?>" /> 
			<h1> <?php echo $post['postTitle']; ?> </h1>
			<p> <?php echo $post['postContent']; ?> </p>
		<?php
			
		}else{
			header('refresh:3; url=../index.php');
			echo "That article is none existent. You will now be redirected to the home page.";
			
		
		}

	}else{
		header('location:../index.php');
		exit();
	}
?>


  
<!-- footer -->
<?php include("./footer.php");?>
<!-- // footer -->
