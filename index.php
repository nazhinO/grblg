<?php
  require_once('./includes/dbh.inc.php');
  
  $sql = "SELECT * FROM post ORDER BY postID DESC;";
  $execute = mysqli_query($conn, $sql);
  $postData = mysqli_num_rows($execute);
?>

<?php
  $title = "Queen Casino";
  include_once("./pages/header.php");
?>
  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Post Slider -->
    <div class="post-slider">
      <h1 class="slider-title">Gallery</h1>
      <i class="fas fa-chevron-left prev"></i>
      <i class="fas fa-chevron-right next"></i>

      <div class="post-wrapper">

        <div class="post">
          <img src="./images/Online.jpg" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.html">Online Casino</a></h4>
            
          </div>
        </div>

        <div class="post">
          <img src="./images/card.jpg" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.html">Card Game</a></h4>
            
          </div>
        </div>

        <div class="post">
          <img src="./images/chips.jpg" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.html">CHIPS</a></h4>
           
          </div>
        </div>

        <div class="post">
          <img src="./images/Bonus.jpg" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.html">Bonus</a></h4>
          </div>
        </div>

        <div class="post">
          <img src="./images/jackpot.jpg" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.html">Mega Jackpot</a></h4>
          </div>
        </div>


      </div>

    </div>
    <!-- // Post Slider -->

    <!-- Content -->
    <div class="content clearfix">

      <!-- Main Content -->
      <div class="main-content">
        <h1 class="recent-post-title">Recent Posts</h1>
        
          <?php
            if($postData > 0){
              while($row = mysqli_fetch_array($execute)){ 
                  $timestamp = $row['datePublished'];
                  $date = date('M, d Y', strtotime($timestamp));
                  $time = date('h:i A', strtotime($timestamp));
                  $author = $row['postAuthor'];
                ?>
                <div class="post clearfix">
                <img class="post-image" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
                <div class="post-preview">
                <h2> 
                  <a href="./pages/post-content.php?postID=<?php echo $row['postID']; ?>"> 
                    <?php echo ucfirst($row['postTitle']); ?> 
                  </a> 
                </h2>
                <i class="far fa-calendar"> Published on: <?php echo $date; ?> At: <?php echo $time; ?> </i> 
                <i class="far fa-user"> By: 
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
                </i>
                
                <p class="preview-text"> 
                  <?php
                    if (strlen($row['postContent']) > 200) // if you want...
                    {
                        $maxLength = 199;
                        $yourString = substr($row['postContent'], 0, $maxLength);
                        echo $yourString ."..."; 
                        ?>
                        <a class="btn read-more" href="./pages/post-content.php?postID=<?php echo $row['postID']; ?>"> 
                    Read More
                  </a> <?php
                    }else{
                      echo $row['postContent'];
                    }
                    
                  ?> 
                </p>
                

          </div>
          <!-- // post-preview" -->
          
          

        </div>
         <!-- // post clearfix" -->
          <?php 
              }
            }
          ?>

      </div>
      <!-- // Main Content -->


    </div>
    <!-- // Content -->

  </div>
  <!-- // Page Wrapper -->

  <!-- footer -->
  <?php include_once("./pages/footer.php");?>
  