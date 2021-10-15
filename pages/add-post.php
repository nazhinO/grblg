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
				        }else if($_GET["error"] == "wronglogin"){
				          echo "<p class=error align=center>Login Failed</p>";
				        }else if($_GET["error"] == "checkpass"){
				          echo "<p class=error align=center>Wrong Password</p>";
				        }else if($_GET["error"] == "unexpectederror"){
				          echo "<p class=error align=center>Enexpected Error</p>";
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
<div class="footer-bottom">
  &copy; QueenCasino
</div>

<!-- Richtexteditor -->
<script type="text/javascript" src="../js/richtexteditor/rte.js"></script>
<script type="text/javascript" src='../js/richtexteditor/plugins/all_plugins.js'></script>
<script>
	var editor1 = new RichTextEditor("#div_editor1");
	//editor1.setHTMLCode("Use inline HTML or setHTMLCode to init the default content.");
</script>

<!-- Navigation JS -->
<script>
  var settingLinks = document.getElementById("settingLinks");

  function showMenu(){
    settingLinks.style.left = "0";
  }
  
  function hideMenu(){
    settingLinks.style.left = "-60%";
  }
</script>

</body>
</html>