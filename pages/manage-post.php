<?php include_once("./header.php"); ?>
  <div class="admin-wrapper">

<!-- Left Sidebar -->
<?php include('./sidebar.php') ?>
<!-- // Left Sidebar -->
<?php //include('./session.php')?>

<!-- Admin Content -->
<div class="admin-content">
    <div class="content">
    <table>
        <thead>
            <th>SN</th>
            <th>Title</th>
            <th>Author</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>This is the first post</td>
                <td>Awa</td>
                <td><a href="#" class="edit">edit</a></td>
                <td><a href="#" class="delete">delete</a></td>
                <td><a href="#" class="publish">publish</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>This is the first post</td>
                <td>Awa</td>
                <td><a href="#" class="edit">edit</a></td>
                <td><a href="#" class="delete">delete</a></td>
                <td><a href="#" class="publish">publish</a></td>
            </tr>
            

        </tbody>
    </table>
    
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