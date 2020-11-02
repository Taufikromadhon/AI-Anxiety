<?php

session_start();

$_SESSION['pakar-login']='';
unset($_SESSION['id-pakar-login']);
unset($_SESSION['pakar-login']);
unset($_SESSION['pass-pakar-login']);
//session_unset();
//session_destroy($_SESSION['pakar-login']);
header("location:login-pakar.php");

?>