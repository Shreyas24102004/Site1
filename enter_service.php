<?php

session_start();

if(empty($_SESSION['User_Name'])){
    header("location:login.php");
}else{
    header("location:Service.php");
}
?>