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
    if(credentialsLength($name) !== false){
      header("location: ../pages/signup.php?error=tooshort");
      exit();
    }
    if(invalidName($name) !== false){
      header("location: ../pages/signup.php?error=invalidname");
      exit();
    }

    createUser($conn, $name, $username, $password);

}else{
  header("location:../pages/signup.php?error=unexpectederror");
}