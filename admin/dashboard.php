
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style1.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
<header>
    <div class="logo">
      <h1 class="logo-text">Admin Page</h1>
    </div>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
      <li><a href="./index.php"></a></li>
      <li><a href="#"></a></li>
      <li><a href="./logout.php">Logout</a></li>

    </ul>
  </header>
  <div class="admin-wrapper">

<!-- Left Sidebar -->
<?php include('./sidebar.php') ?>
<!-- // Left Sidebar -->
<?php include('./session.php')?>

<!-- Admin Content -->
<div class="admin-content">
    <div class="content">

        <h2 class="page-title">Create Post</h2>
        <div class="add_article">
			<form action="./process.php" method="POST">
				<div>
					<label>Title</label>
					<input type="text" name="article_title" class="text-input">
				</div>
				<div class="article_content">
					<label>Content</label>
					<textarea name="article_content" id="editor"></textarea>
				</div>
				<!-- <div>
					<label>Image</label>
					<input type="file" name="image" class="text-input">
				</div> -->
				<div>
					<button type="submit" name="submit" class="btn btn-big">Add Post</button>
				</div>
			</form>

          </div>

    </div>

</div>
<!-- // Admin Content -->

</div>

<!-- <script src="../ckeditor5-build-classic/ckeditor.js"></script>
<script>
	CKEDITOR.replace('articleEditor');
</script> -->
<script src="./node_modules/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>
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
