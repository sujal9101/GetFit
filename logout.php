<?php
session_start();
$_SESSION['user_id']="";
$_SESSION['first_name']="";
$_SESSION['email']="";
unset($_SESSION);
header('Location: index.php');
?>