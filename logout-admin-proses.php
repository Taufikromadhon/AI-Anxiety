<?php

session_start();

$_SESSION['admin-login']='';
unset($_SESSION['id-admin-login']);
unset($_SESSION['admin-login']);
unset($_SESSION['pass-admin-login']);
//session_unset();
//session_destroy($_SESSION['admin-login']);
header("location:login-admin.php");

?>