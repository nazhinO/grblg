<?php

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db_name = 'blog';

    $conn = mysqli_connect($host, $user, $pass, $db_name);

    if(!$conn){
        die("Connection Failed! Error - " . mysqli_connect_error());
    }