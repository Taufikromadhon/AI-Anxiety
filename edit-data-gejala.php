<?php
//include('dbconnected.php');
include('koneksi.php');

$id_gejala = $_GET['id_gejala'];
$nama_gejala = $_GET['nama_gejala'];
$pertanyaan = $_GET['pertanyaan'];
$keterangan_gejala = $_GET['keterangan_gejala'];

//query update
$query = "UPDATE gejala SET nama_gejala='$nama_gejala' , pertanyaan='$pertanyaan' , keterangan_gejala='$keterangan_gejala' WHERE id_gejala='$id_gejala' ";

if (mysqli_query($con, $query)) {
	# credirect ke page index
	header("location:lihat-gejala.php");	
}
else{

	?>
	<script language="JavaScript">
	alert('ERROR, data gagal diupdate');
	document.location='lihat-gejala.php';
	</script>
	<?php

}

//mysql_close($host);
?>


