<?php
//include('dbconnected.php');
include('koneksi.php');

$id_admin = $_GET['id_admin'];
$username = $_GET['username'];
$password = $_GET['password'];
$nama_lengkap = $_GET['nama_lengkap'];
$email = $_GET['email'];

//query update
$query = mysqli_query($con,"UPDATE admin SET username='$username' , password='$password' , nama_lengkap='$nama_lengkap' , email='$email' WHERE id_admin='$id_admin' ");

if ($query==1) {
	# credirect ke page index
	?>
	<script language="JavaScript">
	alert('Selamat, Data Admin Berhasil Diedit!!');
	document.location='dashboard-admin.php'
	</script>
	<?php


}
else{
	?>
	<script language="JavaScript">
	alert('Periksa isian data! Proses Belum Berhasil Dilakukan!');
	document.location='dashboard-lihat-daftar-pakar.php'
	</script>
	<?php
	
}

?>
 