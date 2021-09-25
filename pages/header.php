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

  <!-- Custom Styling -->
  <!-- <link rel="stylesheet" href="/grblg/css/reset.css"> -->
  <!-- <link rel="stylesheet" href="/grblg/css/login.css"> -->
  <!-- <link rel="stylesheet" href="/grblg/css/register.css"> -->
  <!-- <link rel="stylesheet" href="/grblg/css/admin.css"> -->
  <link rel="stylesheet" href="/grblg/css/style1.css">

  <title>Queen Casino</title>
</head>

<body>
  
<header>
  <div class="logo">
    <h1 class="logo-text"><span>My</span>Blog</h1>
  </div>
  <i class="fa fa-bars menu-toggle"></i>
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
</header>