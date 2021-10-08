<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Biryani:wght@400;700&family=Syncopate:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

  <!-- Custom Styling -->
  <!-- <link rel="stylesheet" href="/grblg/css/reset.css"> -->
  <!-- <link rel="stylesheet" href="/grblg/css/login.css"> -->
  <!-- <link rel="stylesheet" href="/grblg/css/register.css"> -->
  <!-- <link rel="stylesheet" href="/grblg/css/admin.css"> -->
  <link rel="stylesheet" href="/grblg/css/style1.css">

  <title><?php echo ucfirst($title); ?></title>
</head>

<body>
  
<header>
  <nav>
  <div class="logo">
    <h1 class="logo-text"><span>My</span>Blog</h1>
  </div>
  <div class="nav-links" id="settingLinks">
  <i class="fa fa-times" onclick="hideMenu()"></i>
  <ul class="nav">
    <li><a href="/grblg/index.php">Home</a></li>
    <li><a href="#footer1">About</a></li>
    <?php
      if(isset($_SESSION["userID"])){
        echo "<li><a href='/grblg/includes/logout.inc.php'>Logout</a></li>";
      }else{
        echo "<li><a href='/grblg/pages/login.php'>Login</a></li>";
      }
    ?>
    
  </ul>
</div>
<i class="fa fa-bars" onclick="showMenu()"></i>
</nav>
</header>