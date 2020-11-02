<?php
session_start();
require_once("koneksi.php");


$usernamepakarbaru= $_POST['pakar-baru-username'];
$passwordpakarbaru=$_POST['pakar-baru-password'];
$namalengkappakarbaru= $_POST['pakar-baru-nama-lengkap'];
$emailpakarbaru= $_POST['pakar-baru-email'];

$query=mysqli_query($con, "INSERT INTO pakar (username, password, nama_lengkap, email) VALUES ('$usernamepakarbaru','$passwordpakarbaru','$namalengkappakarbaru', '$emailpakarbaru')");



if ($query==1) {
	# credirect ke page index
	?>
	<script language="JavaScript">
	alert('Selamat, Data Pakar Berhasil Ditambah!!');
	document.location='tambah-pakar.php'
	</script>
	<?php


}
else{
	?>
	<script language="JavaScript">
	alert('Periksa isian data! Proses Belum Berhasil Dilakukan!');
	document.location='tambah-pakar.php'
	</script>
	<?php
	
}

?>
 