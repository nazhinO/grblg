
<?php include("./header.php");?>
<?php
  if(isset($_SESSION["userID"])){
    header("location: ../index.php");
  }
?>
  <div class="center">
    <h1>Login</h1>
    <form action="../includes/login.inc.php" method="POST">
      <div class="txt_field">
        <input type="text" name="username">
        <span></span>
        <label>Username</label>
      </div>
      <div class="txt_field">
        <input type="password" name="password">
        <span></span>
        <label>Password</label>
      </div>
      <!-- signup_link class is after the submit button before -->
      
      <input type="submit" value="Login" name="submit">
      <div class="signup_link">
      </div>
    </form>
    <?php

      if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
          echo "<p>Fill in all fields!</p>";
        }else if($_GET["error"] == "wronglogin"){
          echo "<p>Login Failed</p>";
        }else if($_GET["error"] == "checkpass"){
          echo "<p>Wrong Password</p>";
        }
      }
    ?>
  </div>
</body>
</html>
<?php //include("./footer.php");?>