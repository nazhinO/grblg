<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'blog';

$conn = mysqli_connect($host, $user, $pass, $db_name);

if(!$conn){
    echo "Failed to connect to the server";
    exit();
}

/*
<?php

$server_name = 'localhost';
$server_user = 'root';
$server_pass = '';
$db_name = 'blog';

$con = mysqli_connect($server_name, $server_user, $server_pass, $db_name);

if(!$con){
    echo "Failed to connect to the server";
    exit();
}

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}
*/