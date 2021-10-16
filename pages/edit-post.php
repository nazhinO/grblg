<?php
  $title = "Edit Post";
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

        <h2 class="page-title">Edit Post</h2>
        <form action="../includes/edit-post.inc.php" method="POST" enctype="multipart/form-data">
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
        <input type="text" name="ID" value="<?php echo $post['postID']; ?>" readonly><br>
        <div>
			<label>Title</label>
			<input type="text" name="title" class="text-input" value="<?php echo $post['postTitle']; ?>" >
		</div>
		<div class="post_content">
			<label>Content</label>
			<textarea name="content" id="div_editor1" value="<?php echo $post['postContent']; ?>" > </textarea>
		</div>
		<div>
			<label>Thumbnail</label><br>
			<i class = "notif"> Leave empty if you don't want to replace the old thumbnail </i>
			<input type="file" name="image" class="text-input">
		</div>
		<div>
			<button type="submit" name="submit" class="btn btn-big">Edit Post</button>
		</div>
        
        <?php
    }
}
?>
        </form>
    </div>

</div>
<!-- // Admin Content -->

</div>

<?php include_once("./footer.php"); ?>