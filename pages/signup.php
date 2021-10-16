<?php require_once('../includes/dbh.inc.php')?>
<?php
  $title = "Add User";
  include_once("./header.php");
?>
<?php require_once("../includes/session.inc.php"); ?>
<div class="admin-wrapper">

<!-- Left Sidebar -->
<?php include('./sidebar.php') ?>
<!-- // Left Sidebar -->

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
    <?php
      if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
          echo "<p class=error align=center>Fill in all fields!</p>";
        }else if($_GET["error"] == "invalidusername"){
          echo "<p class=error align=center>Invalid username.</p>";
        }else if($_GET["error"] == "passwordsdontmatch"){
          echo "<p class=error align=center>Passwords doesn't match!</p>";
        }else if($_GET["error"] == "stmtfailed"){
          echo "<p class=error align=center>Query error. Please try again later.</p>";
        }else if($_GET["error"] == "usernametaken"){
          echo "<p class=error align=center>Username already taken!</p>";
        }else if($_GET["error"] == "unexpectederror"){
          echo "<p class=error align=center>Enexpected Error</p>";
        }else if($_GET["error"] == "tooshort"){
          echo "<p class=error align=center>Name is too short.</p>";
        }else if($_GET["error"] == "invalidname"){
          echo "<p class=error align=center>Invalid name.</p>";
        }else if($_GET["error"] == "none"){
          echo "<p class=success align=center>You have signed up!</p>";
        }
      }
    ?>
    <input type="submit" value="Register" id="register" name="submit">
    <div class="signup_link">
    </div>
  </form>
</div>

</div>

</div>

<?php include("./footer.php");?>