<?php
  $title = "Edit User";
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
        <label>ID</label>
        <input type="text" class="text-input" name="ID" value="<?php echo $post['userID']; ?>" readonly><br>
        <label>Name</label>
        <input type="text" class="text-input" name="name" value="<?php echo $post['userName']; ?>" ><br>
        <label>Username</label>
        <input type="text" class="text-input" name="alias" value="<?php echo $post['userAlias']; ?>" ><br>
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

<?php include_once("./footer.php"); ?>