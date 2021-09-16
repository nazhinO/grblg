
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style1.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
<header>
    <div class="logo">
      <h1 class="logo-text">Admin Page</h1>
    </div>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
      <li><a href="./index.php"></a></li>
      <li><a href="#"></a></li>
      <li><a href="./logout.php">Logout</a></li>

    </ul>
  </header>
  <div class="admin-wrapper">

<!-- Left Sidebar -->
<?php include('./sidebar.php') ?>
<!-- // Left Sidebar -->
<?php include('./session.php')?>

<!-- Admin Content -->
<div class="admin-content">
    <div class="content">
    </div>

</div>
<!-- // Admin Content -->

</div>
</body>
</html>