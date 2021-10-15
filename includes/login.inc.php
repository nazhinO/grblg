<?php

    if(isset($_POST["submit"])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        //$password_encrypted =sha1($password);

        require_once('./dbh.inc.php');
        require_once('./function.inc.php');

        if(emptyInputLogin($username, $password) !== false){
          header("location: ../pages/login.php?error=emptyinput");
          exit();
        }

        loginUser($conn, $username, $password);

    }else{
        header("location: ../pages/login.php?error=unexpectederror");
        exit();
    }
