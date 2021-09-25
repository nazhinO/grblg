<?php include_once("./header.php"); ?>
<div class="admin-wrapper">

<!-- Left Sidebar -->
<?php include('./sidebar.php') ?>
<!-- // Left Sidebar -->
<?php //include('./session.php')?>

<!-- Admin Content -->
<div class="admin-content">
    <div class="content">

        <h2 class="page-title">Hello <?php echo $_SESSION["userAlias"]; ?></h2>

    </div>

</div>
</div>
<!-- // Admin Content -->
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
<?php //include_once("./footer.php"); ?>