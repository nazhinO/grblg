<?php
   session_start();
   if(isset($_SESSION['userAlias'])){
    header("localtion:../pages/dashboard.php");    
   }
   else{
    header("location:../index.php");
   }
