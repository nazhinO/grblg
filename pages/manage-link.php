<?php
  require_once('../includes/dbh.inc.php');
  
  $sql = "SELECT * FROM link;";
  $execute = mysqli_query($conn, $sql);
  $linkData = mysqli_num_rows($execute);
?>
<?php
  $title = "Manage Links";
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
        <form action="../includes/manage-link.inc.php" method="GET">
 
         <?php
            if($linkData > 0){
              while($row = mysqli_fetch_array($execute)){ 
                  // $instagram = $row['linkInstagram'];
                  // $twitter = $row['linkTwitter'];
                  // $facebook = $row['linkFacebook'];
        ?>
                <label for="instagram">Instagram</label><br>
                <input type="text" class="text-input" name="instagram" value="<?php echo $row['linkInstagram']; ?>" ><br>
                <label for="twitter">Twitter</label><br>
                <input type="text" class="text-input" name="twitter" value="<?php echo $row['linkTwitter']; ?> " ><br>
                <label for="facebook">Facebook</label><br>
                <input type="text" class="text-input" name="facebook" value="<?php echo $row['linkFacebook']; ?>" ><br>
                <input type="submit" value="Update" name="submit">    
        <?php 
        }
        }
        ?>
        </form>
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