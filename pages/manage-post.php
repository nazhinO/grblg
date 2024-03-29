<?php
  $title = "Manage Post";
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
    <table>
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
            <?php
              require_once('../includes/dbh.inc.php');
              
              $sql = "SELECT * FROM post ORDER BY postID DESC;";
              $execute = mysqli_query($conn, $sql);
              $postData = mysqli_num_rows($execute);
            ?>
            <tr>
                <?php
                if($postData > 0){
                 while($row = mysqli_fetch_array($execute)){ 
                  $id = $row['postID'];
                  $title = $row['postTitle'];
                  $author = $row['postAuthor'];
                ?>
                <td><?php echo $id ?></td>
                <td><?php echo $title; ?></td>
                <td>
                    <?php
                    $getAuthor = "SELECT * FROM user WHERE userID = '$author';";
                    $result = mysqli_query($conn, $getAuthor);
                    $getName = mysqli_num_rows($result);

                    if($getName == 1){
                      while($authorName = mysqli_fetch_array($result)){

                      echo $authorName['userName']; 
                      }
                    }else{
                      echo "Database is EMPTY!";
                    }
                  ?> 
                </td>
                <td><a href="./edit-post.php?postID=<?php echo $id; ?>" class="edit">edit</a></td>
                <td><input type="button" onclick="deleteMe(<?php echo $id; ?>)" class="delete" name="delete" value="Delete"></td>

                <!-- <td><a href="../includes/delete-post.inc.php?postID=<?php echo $id; ?>"  class="delete">delete</a></td> -->
                <!-- <td><a href="#" class="publish">publish</a></td> -->
            </tr>
            <script type="text/javascript">
                function deleteMe(delID){
                    if(confirm("Are you sure you want to delete this post?")){
                        window.location.href='../includes/delete-post.inc.php?del_ID=' +delID+'';
                        return true;
                    }
                }
            </script>
            <?php
                }
                ?>
<?php
                }
                ?>
        </tbody>
    </table>
    
    </div>

</div>
<!-- // Admin Content -->

</div>

<?php include_once("./footer.php"); ?>