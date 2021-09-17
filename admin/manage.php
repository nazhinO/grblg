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
      <li><a href="../index.php"></a></li>
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
    <table>
        <thead>
            <th>SN</th>
            <th>Title</th>
            <th>Author</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>This is the first post</td>
                <td>Awa</td>
                <td><a href="#" class="edit">edit</a></td>
                <td><a href="#" class="delete">delete</a></td>
                <td><a href="#" class="publish">publish</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>This is the first post</td>
                <td>Awa</td>
                <td><a href="#" class="edit">edit</a></td>
                <td><a href="#" class="delete">delete</a></td>
                <td><a href="#" class="publish">publish</a></td>
            </tr>
            

        </tbody>
    </table>
    
    </div>

</div>
<!-- // Admin Content -->

</div>
</body>
</html>