<?php require_once('../includes/dbh.inc.php')?>
<?php include("./header.php");?>
<div class="admin-wrapper">

<!-- Left Sidebar -->
<?php include('./sidebar.php') ?>
<!-- // Left Sidebar -->
<?php //include('../includes/session.php')?>

<div class="admin-content">
<div class="center">
  <h1>Add User</h1>
  <form method="POST" action="../includes/signup.inc.php">
    <div class="txt_field">
      <input type="text" name="name">
      <label>Name</label>
    </div>
    <div class="txt_field">
      <input type="text" name="username">
      <label>Username</label>
    </div>
    <div class="txt_field">
      <input type="password" name="password">
      <label>Password</label>
    </div>
    <div class="txt_field">
      <input type="password" name="cpassword">
      <label>Confirm Password</label>
   
    </div>
    <input type="submit" value="Register" id="register" name="submit">
    <div class="signup_link">
     
  
     
    </div>
  </form>
</div>


</div>
<?php
  if(isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
      echo "<p>Fill in all fields!</p>";
    }else if($_GET["error"] == "invalidusername"){
      echo "<p>Choose a proper username!</p>";
    }else if($_GET["error"] == "passwordsdontmatch"){
      echo "<p>Passwords doesn't match!";
    }else if($_GET["error"] == "stmtfailed"){
      echo "<p>Something went wrong</p>";
    }else if($_GET["error"] == "usernametaken"){
      echo "<p>Username already taken!</p>";
    }else if($_GET["error"] == "none"){
      echo "<p>You have signed up!</p>";
    }
  }
?>

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

<?php //include("./footer.php");?>