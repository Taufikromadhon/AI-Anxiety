<?php
session_start();
 
if(!isset($_SESSION['admin-login'])){
	echo '<script language="javascript">alert("Anda Harus Sign In Terlebih Dahulu!"); 
	document.location="login-admin.php";</script>';
}
?>