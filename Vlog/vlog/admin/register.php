<?php require_once('../connection.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style1.css">
  <link rel="stylesheet" href="../css/register.css">
 
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

<div class="admin-content">
<div class="center">
      <h1>Login</h1>
      <form method="POST" action="../function.php">
        <div class="txt_field">
          <input type="text" required name="name">
          <label>Name</label>
        </div>
        <div class="txt_field">
          <input type="text" required name="username">
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" required name="password">
          <label>Password</label>
        </div>
        <div class="txt_field">
          <input type="password" required name="cpassword">
          <label>Confirm Password</label>
       
        </div>
        <input type="submit" value="Register" id="register" name="submit">
        <div class="signup_link">
         
      
         
        </div>
      </form>
    </div>


</div>

</div>
<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type = "text/javascript">
  $(function(){
   $('#register').click(function(e){
      var valid = this.form.checkValidity();
      if(valid){

        var name      = $('#name').val();
        var username  = $('#username').val();
        var password  = $('password').val();
        var cpassword      = $('#cpassword').val();
        e.preventDefault();
        
        $.ajax({
          type: 'POST',
          url: '../function.php',
          data: {name: name,username: username,password: password,cpassword: cpassword},
          success:function(data){
              swal.fire({
                    'title': 'Successful',
                    'text':   data,
                    'type':   'success'
              })
          },
          error: function(data){
            swal.fire({
                    'title': 'error',
                    'text':   'there are error',
                    'type':   'error'
              })
          }
        });


      }
    });  
  });

</script>
-->

</body>
</html>