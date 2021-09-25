<?php 
    session_start();
    session_unset();
    session_destroy();
    echo "<script> alert('You are Now Logged Out');window.location='../index.php'</script>";