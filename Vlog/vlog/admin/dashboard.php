
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

        <h2 class="page-title">Create Post</h2>
        <div class="content">
                    <form action="" method="post">
                        <div>
                            <label>Title</label>
                            <input type="text" name="title" class="text-input">
                        </div>
                        <div class="body">
                            <label>Body</label>
                            <textarea name="body" id="body"></textarea>
                        </div>
                        <div>
                            <label>Image</label>
                            <input type="file" name="image" class="text-input">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-big">Add Post</button>
                        </div>
                    </form>

                </div>

    </div>

</div>
<!-- // Admin Content -->

</div>
</body>
</html>