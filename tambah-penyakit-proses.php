<?php
session_start();
include('koneksi.php');

$idpenyakitbaru= $_POST['id-penyakit-baru'];
$namapenyakitbaru=$_POST['penyakit-baru-nama-penyakit'];
$definisisolusipenyakitbaru= $_POST['penyakit-baru-definisi-solusi'];


$tambahpenyakit=mysqli_query($con, "INSERT INTO penyakit (id_penyakit, nama_penyakit, definisi_solusi) VALUES ('$idpenyakitbaru','$namapenyakitbaru','$definisisolusipenyakitbaru')");

if ($tambahpenyakit==1) {
	# credirect ke page index
	?>
	<script language="JavaScript">
	alert('Selamat, Jenis penyakit Berhasil Ditambah!!');
	document.location='tambah-penyakit.php'
	</script>
	<?php


}
else{
	?>
	<script language="JavaScript">
	alert('Periksa isian data! ID Penyakit Terduplikasi!');
	document.location='tambah-penyakit.php'
	</script>
	<?php
	
}

?>

	


	




