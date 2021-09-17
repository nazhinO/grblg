<?php
$con = mysqli_connect("localhost","root","","blog");

if (!$con){
    die("Error".mysqli_connect_error());
}
?>