<?php
  require_once('./database/connect.php');
  
  $sql = "SELECT * FROM article ORDER BY ID DESC;";
  $execute = mysqli_query($conn, $sql);
  $postData = mysqli_num_rows($execute);
?>
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
  <link rel="stylesheet" href="./css/style1.css">

  <title>Queen Casino</title>
</head>

<body>
<?php include("./header.php");?>
  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Post Slider -->
    <div class="post-slider">
      <h1 class="slider-title">Gallery</h1>
      <i class="fas fa-chevron-left prev"></i>
      <i class="fas fa-chevron-right next"></i>

      <div class="post-wrapper">

        <div class="post">
          <img src="./image/Online.jpg" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.html">Online Casino</a></h4>
            
          </div>
        </div>

        <div class="post">
          <img src="./image/card.jpg" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.html">Card Game</a></h4>
            
          </div>
        </div>

        <div class="post">
          <img src="./image/chips.jpg" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.html">CHIPS</a></h4>
           
          </div>
        </div>

        <div class="post">
          <img src="./image/Bonus.jpg" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.html">Bonus</a></h4>
          </div>
        </div>

        <div class="post">
          <img src="./image/jackpot.jpg" alt="" class="slider-image">
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
        <div class="post clearfix">
          <!-- <img src="./image/Casino -(Flickr).jpg" alt="" class="post-image"> -->
          <div class="post-preview">
          <?php
            if($postData > 0){
              while($row = mysqli_fetch_array($execute)){ 
                  $timestamp = $row['date_published'];
                  $date = date('M, d Y', strtotime($timestamp));
                  $time = date('h:i A', strtotime($timestamp));
                  $author = $row['user_ID'];
                ?>
                <h2> <a href="./details.php?ID=<?php echo $row['ID']; ?>"> <?php echo $row['article_title']; ?> </a> </h2>
                <span class="far fa-calendar"> Published on: <?php echo $date; ?> At: <?php echo $time; ?> </span> </br>
                <span class="far fa-user"> By: 
                  <?php
                    $getAuthor = "SELECT * FROM user WHERE id = '$author';";
                    $result = mysqli_query($conn, $getAuthor);
                    $getName = mysqli_num_rows($result);

                    if($getName == 1){
                      while($authorName = mysqli_fetch_array($result)){

                      echo $authorName['name']; 
                      }
                    }else{
                      echo "Database is EMPTY!";
                    }
                  ?> 
                </span>
                <?php 
              }
            }
          ?>
            &nbsp;
            <!-- <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="single.html" class="btn read-more">Read More</a> -->
          </div>
        </div>
         
      </div>
      <!-- // Main Content -->

    </div>
    <!-- // Content -->

  </div>
  <!-- // Page Wrapper -->

  <!-- footer -->
  <?php include("./footer.php");?>
  </div>
  <!-- // footer -->


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick Carousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Custom Script -->
  <script src="js/scripts.js"></script>



      
      

</body>

</html>
