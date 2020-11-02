<?php
session_start();
 
if(isset($_SESSION['admin-login'])){
	echo '<script language="javascript">alert("Anda Sudah Sign In! Sign Out Dulu Bila Ingin Berganti Akun!"); 
	document.location="dashboard-admin.php";</script>';
}
?>