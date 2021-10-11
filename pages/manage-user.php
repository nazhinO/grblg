<?php
  $title = "Manage User";
  include_once("./header.php");
?>
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
                <td><input type="button" onclick="deleteMe(<?php echo $id; ?>)" class="delete" name="delete" value="Delete"></td>
                <!-- <td><a href="../includes/delete-user.inc.php?userID=<?php echo $id; ?>" class="delete">delete</a></td> -->
            </tr>
            <script type="text/javascript">
                function deleteMe(delID){
                    if(confirm("Are you sure you want to delete this account?")){
                        window.location.href='../includes/delete-user.inc.php?del_ID=' +delID+'';
                        return true;
                    }
                }
            </script>
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
<?php //include_once("./footer.php"); ?>