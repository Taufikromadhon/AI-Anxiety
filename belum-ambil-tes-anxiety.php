<?php
session_start();
 
if(!isset($_SESSION['kecemasan1'])){
	echo '<script language="javascript">alert("Anda Harus Ambil Tes Anxiety Terlebih Dahulu!"); 
	document.location="ambil-tes-anxiety.php";</script>';
}
?>