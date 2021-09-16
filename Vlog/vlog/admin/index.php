<?php
   session_start();
   if(isset($_SESSION['username'])){
   
   }
    else{
      header("localtion:dashboard.php");
   }
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="../css/login.css">
    </head>
    <body>
    <header>
        <div class="logo">
          <h1 class="logo-text"></h1>
        </div>
        <i class="fa fa-bars menu-toggle"></i>
    </header>

      <div class="center">
          <h1>Login</h1>
          <form action="../sigin.php" method="post">
            <div class="txt_field">
              <input type="text" required name="username">
              <span></span>
              <label>Username</label>
            </div>
            <div class="txt_field">
              <input type="password" required name="password">
              <span></span>
              <label>Password</label>
            </div>
            <input type="submit" value="Login">
            <div class="signup_link">
            
            </div>
          </form>
        </div>
    </body>
    </html>  