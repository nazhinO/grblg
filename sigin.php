<?php
    session_start();
    include('connection.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_encrypted =sha1($password);

    $sql = mysqli_query($con, "SELECT count(*) as total from user WHERE username = '".$username."' and password = '".$password_encrypted."'");
    $row = mysqli_fetch_array($sql);

    if($row["total"] > 0){
        $_SESSION['username'] = $username;
        echo "<script> alert('Login Success');window.location='admin/dashboard.php'</script>"; 
    }else{
        echo "<script> alert('Login Failed');window.location='admin/index.php '</script>";
    }
?>