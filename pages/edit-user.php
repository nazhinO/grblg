<?php
  $title = "Edit User";
  include_once("./header.php");
?>
<?php require_once("../includes/session.inc.php"); ?>
<div class="admin-wrapper">

<!-- Left Sidebar -->
<?php include('./sidebar.php') ?>
<!-- // Left Sidebar -->
<?php //include('./session.php')?>

<!-- Admin Content -->
<div class="admin-content">
    <div class="content">

        <h2 class="page-title">Edit User</h2>
        <form action="../includes/edit-user.inc.php" method="POST">
        <?php 
            if(isset($_GET['userID'])){
            require_once('../includes/dbh.inc.php');

            $auth_id = mysqli_real_escape_string($conn, $_GET['userID']);
            $sql = "SELECT * FROM user WHERE userID = $auth_id;";
            $execute = mysqli_query($conn, $sql);
            $post = mysqli_fetch_assoc($execute);

    // $auth_id == $post['ID']
            if($post > 0){ 
        ?>
        <input type="text" name="ID" value="<?php echo $post['userID']; ?>" readonly><br>
        <input type="text" name="name" value="<?php echo $post['userName']; ?>" ><br>
        <input type="text" name="alias" value="<?php echo $post['userAlias']; ?>" ><br>
        <!-- <input type="password" name="pwd" value="<?php // echo $post['userPwd']; ?>" ><br> -->

      <input type="submit" value="Update" name="submit">
        <?php
    }
}
?>
        </form>
    </div>

</div>
<!-- // Admin Content -->

</div>
<div class="footer-bottom">
    &copy; QueenCasino
</div>
<script src="../js/node_modules/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

</body>

</html>
<?php //include_once("./footer.php"); ?>