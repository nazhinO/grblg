
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

  <title>Details</title>
</head>

<body>
<?php include("./header.php");?>

<?php
	if(isset($_GET['ID'])){
		require_once('./database/connect.php');

		$auth_id = mysqli_real_escape_string($conn, $_GET['ID']);
		$sql = "SELECT * FROM article WHERE ID = $auth_id;";
		$execute = mysqli_query($conn, $sql);
		$post = mysqli_fetch_assoc($execute);

		if($auth_id != $post['ID']){
			header('refresh:3; url=index.php');
			echo "That article is none existent. You will now be redirected to the home page.";
		}

	}else{
		header('location:index.php');
		exit();
	}
?>

<h1> <?php echo $post['article_title']; ?> </h1>
<p> <?php echo $post['article_content']; ?> </p>
  
<!-- footer -->
<?php include("./footer.php");?>
<!-- // footer -->


<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Slick Carousel -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Custom Script -->
<script src="js/scripts.js"></script>



      
      

</body>

</html>