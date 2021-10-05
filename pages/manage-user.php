<?php include_once("./header.php"); ?>
<?php require_once("../includes/session.inc.php"); ?>
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
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
            <?php
              require_once('../includes/dbh.inc.php');
              
              $sql = "SELECT * FROM user ORDER BY userID DESC;";
              $execute = mysqli_query($conn, $sql);
              $postData = mysqli_num_rows($execute);
            ?>
            <tr>
                <?php
                if($postData > 0){
                 while($row = mysqli_fetch_array($execute)){ 
                  $id = $row['userID'];
                  $name = $row['userName'];
                  $alias = $row['userAlias'];
                ?>
                <td><?php echo $id ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $alias; ?></td>
                <td><a href="edit-user.php?userID=<?php echo $id; ?>" class="edit">edit</a></td>
                <td><a href="#" class="delete">delete</a></td>
            </tr>
            <?php
                }
                ?>
<?php
                }
                ?>
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
<?php //include_once("./footer.php"); ?>