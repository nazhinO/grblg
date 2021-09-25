<?php
    //session_start();
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
        header("location: ../pages/login.php");
        exit();
    }


    // session_start();
    // include('./dbh.inc.php');
    // $username = $_POST['userAlias'];
    // $password = $_POST['userPwd'];
    // $password_encrypted =sha1($password);

    // $sql = mysqli_query($con, "SELECT count(*) as total from user WHERE userAlias = '".$username."' and userPwd = '".$password_encrypted."'");
    // $row = mysqli_fetch_array($sql);

    // if($row["total"] > 0){
    //     $_SESSION['userAlias'] = $username;
    //     echo "<script> alert('Login Success');window.location='../pages/add-post.php'</script>"; 
    // }else{
    //     echo "<script> alert('Login Failed');window.location='../index.php '</script>";
    // }
