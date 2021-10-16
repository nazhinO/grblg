<?php
  $title = "Dashboard";
  include_once("./header.php");
?>
<?php require_once("../includes/session.inc.php"); ?>
  <div class="admin-wrapper">

<!-- Left Sidebar -->
<?php include('./sidebar.php') ?>
<!-- // Left Sidebar -->

<!-- Admin Content -->
<div class="admin-content">
    <div class="content">

        <h2 class="page-title">Hello <?php echo $_SESSION["userAlias"]; ?></h2>

    </div>

</div>
<!-- // Admin Content -->

</div>
<?php include_once("./footer.php"); ?>