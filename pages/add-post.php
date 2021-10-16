<?php
	$title = "Add Post";
	include_once("./header.php");
?>
<?php require_once("../includes/session.inc.php"); ?>

<div class="admin-wrapper">

<!-- Left Sidebar -->
<?php include('./sidebar.php') ?>
<!-- // Left Sidebar -->

<!-- Admin Content -->
<div class="admin-content">
  <div class="content">
			<h2 class="page-title">Create Post</h2>
	      <div class="add_post">
				<form action="../includes/add-post.inc.php" method="POST" enctype="multipart/form-data">
					<!-- <input type="hidden" name="MAX_FILE_SIZE" value="30000" /> -->
					<div>
						<label>Title</label>
						<input type="text" name="title" class="text-input">
					</div>
					<div class="post_content" >
						<label>Content</label>
						<textarea id="div_editor1" name="content"></textarea>
					</div>
					<div>
						<label>Thumbnail</label>
						<input type="file" name="image" class="text-input">
					</div>
					<div>
						<?php

				      if(isset($_GET["error"])){
				        if($_GET["error"] == "emptyinput"){
				          echo "<p class=error align=center>Fill in all fields!</p>";
				        }else if($_GET["error"] == "invalidthumbnail"){
				          echo "<p class=error align=center>Sorry, only JPG, JPEG, PNG, & GIF files are allowed to be uploaded.</p>";
				        }else if($_GET["error"] == "stmtfailed"){
				          echo "<p class=error align=center>Query error.</p>";
				        }else if($_GET["error"] == "unexpectederror"){
				          echo "<p class=error align=center>Enexpected Error</p>";
				        }else if($_GET["error"] == "none"){
				          echo "<p class=success align=center>Post has been successfully added!</p>";
				        }
				      }
				      
				    ?>
						<button type="submit" name="submit" class="btn btn-big">Add Post</button>
					</div>
				</form>
	      </div>
  </div>
</div>
<!-- // Admin Content -->

</div>

<!-- footer -->
<?php include_once("./footer.php");?>