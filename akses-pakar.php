<?php
session_start();
 
if(!isset($_SESSION['pakar-login'])){
	echo '<script language="javascript">alert("Anda Harus Sign In Terlebih Dahulu!"); 
	document.location="login-pakar.php";</script>';
}
?>