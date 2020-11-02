<?php
//include('dbconnected.php');
include('koneksi.php');

$id_pakar = $_GET['id_pakar'];
$username = $_GET['username'];
$password = $_GET['password'];
$nama_lengkap = $_GET['nama_lengkap'];
$email = $_GET['email'];

//query update
$query = mysqli_query($con,"UPDATE pakar SET username='$username' , password='$password' , nama_lengkap='$nama_lengkap' , email='$email' WHERE id_pakar='$id_pakar' ");

if ($query==1) {
	# credirect ke page index
	?>
	<script language="JavaScript">
	alert('Selamat, Data Pakar Berhasil Diedit!!');
	document.location='lihat-daftar-pakar.php'
	</script>
	<?php


}
else{
	?>
	<script language="JavaScript">
	alert('Periksa isian data! Proses Belum Berhasil Dilakukan!');
	document.location='lihat-daftar-pakar.php'
	</script>
	<?php
	
}

?>
 