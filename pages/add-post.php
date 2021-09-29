<?php include_once("./header.php"); ?>
<?php require_once("../includes/session.inc.php"); ?>
  <div class="admin-wrapper">

<!-- Left Sidebar -->
<?php include('./sidebar.php') ?>
<!-- // Left Sidebar -->
<?php // include('./session.php')?>

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
				<div class="post_content">
					<label>Content</label>
					<textarea name="content" id="editor"></textarea>
				</div>
				<div>
					<label>Thumbnail</label>
					<input type="file" name="image" class="text-input">
				</div>
				<div>
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
<script src="../js/node_modules/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>
<script>
	ClassicEditor
		.create( document.querySelector( '#editor' ) )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( error => {
			console.error( 'There was a problem initializing the editor.', error );
		} );
</script>
</body>
</html>

</body>

</html>