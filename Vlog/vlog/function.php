<?php

include'connection.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password == $cpassword) {
         $query = "SELECT * FROM user WHERE username ='$username'";
         $result = mysqli_query($con, $query);
          if ($result->num_rows > 0) {
              echo "<script> alert('Username Already Exist');window.location='../vlog/admin/register.php'</script>";
          }else{
              $password = sha1($_POST['password']);
              $query = "INSERT INTO user (name,username,password) VALUES ('$name','$username','$password') ";
              $result = mysqli_query($con, $query);
              if ($result){
                  echo "<script> alert('Registration Complete');window.location='../vlog/admin/register.php'</script>";
           
              }else{
                  echo "Something Went Wrong ";
              } 
          }
  
            
         
    }else{
        echo "<script> alert('Password Not Matched');window.location='../vlog/admin/register.php'</script>";
    }
}
?>