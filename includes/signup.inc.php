<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    require_once './dbh.inc.php';
    require_once './function.inc.php';

    if(emptyInputSignup($name, $username, $password, $cpassword) !== false){
      header("location: ../pages/signup.php?error=emptyinput");
      exit();
    }
    if(invalidUsername($username) !== false){
      header("location: ../pages/signup.php?error=invalidusername");
      exit();
    }
    if(passwordMatch($password, $cpassword) !== false){
      header("location: ../pages/signup.php?error=passwordsdontmatch");
      exit();
    }
    if(usernameExists($conn, $username) !== false){
      header("location: ../pages/signup.php?error=usernametaken");
      exit();
    }

    createUser($conn, $name, $username, $password);

    // if ($password == $cpassword) {
    //      $query = "SELECT * FROM user WHERE username ='$username'";
    //      $result = mysqli_query($con, $query);
    //       if ($result->num_rows > 0) {
    //           echo "<script> alert('Username Already Exist');window.location='./admin/register.php'</script>";
    //       }else{
    //           $password = sha1($_POST['password']);
    //           $query = "INSERT INTO user (name,username,password) VALUES ('$name','$username','$password') ";
    //           $result = mysqli_query($con, $query);
    //           if ($result){
    //               echo "<script> alert('Registration Complete');window.location='./admin/register.php'</script>";
           
    //           }else{
    //               echo "Something Went Wrong ";
    //           } 
    //       }
  
            
         
    // }else{
    //     echo "<script> alert('Password Not Matched');window.location='../vlog/admin/register.php'</script>";
    // }
}else{
  header("location:../pages/signup.php");
}