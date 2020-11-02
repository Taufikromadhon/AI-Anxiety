<?php
//include('dbconnected.php');
include('koneksi.php');

$id_penyakit = $_GET['id_penyakit'];
$nama_penyakit = $_GET['nama_penyakit'];
$definisisolusi = $_GET['definisi-solusi']; 

//query update
$query = "UPDATE penyakit SET nama_penyakit='$nama_penyakit' , definisi_solusi='$definisisolusi'  WHERE id_penyakit='$id_penyakit' ";

if (mysqli_query($con, $query)) {
	# credirect ke page index
	header("location:lihat-penyakit.php");	
}
else{
	echo "ERROR, data gagal diupdate". mysql_error();
}

//mysql_close($host);
?>