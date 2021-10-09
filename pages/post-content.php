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
<div class="inside-post">
		<!-- <img class="post-thumbnail" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($post['image']); ?>" />  -->
		<div class="entry-title">
			<h1> <?php echo ucfirst($post['postTitle']); ?> </h1>

		</div>
		<div class="entry-content">
		<p> <?php echo $post['postContent']; ?> </p>
		<?php
			// if post>0
		}else{
			header('refresh:3; url=../index.php');
			echo "That article is none existent. You will now be redirected to the home page.";
			
		
		}
		// if sa isset
	}else{
		header('location:../index.php');
		exit();
	}
?>
</div>
</div>
  
<!-- footer -->
<?php include("./footer.php");?>
<!-- // footer -->
