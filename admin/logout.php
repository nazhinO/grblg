<?php 
    session_start();
    session_destroy();
    echo "<script> alert('You are Now Logged Out');window.location='login.php'</script>";
?>