<?php
session_start();
require_once("koneksi.php");


$idgejalabaru= $_POST['id-gejala-baru'];
$namagejalabaru=$_POST['gejala-baru-nama-gejala'];
$definisigejalabaru= $_POST['gejala-baru-pertanyaan'];
$solusigejalabaru= $_POST['gejala-baru-keterangan-gejala'];

$tambahgejala=mysqli_query($con, "INSERT INTO gejala (id_gejala, nama_gejala, pertanyaan, keterangan_gejala) VALUES ('$idgejalabaru', '$namagejalabaru', '$definisigejalabaru', '$solusigejalabaru')");


if ($tambahgejala==1) {
	# credirect ke page index
	?>
	<script language="JavaScript">
	alert('Selamat, Gejala Berhasil Ditambah!!');
	document.location='tambah-gejala.php'
	</script>
	<?php


}
else{
	?>
	<script language="JavaScript">
	alert('Periksa isian data! ID Gejala Terduplikasi!');
	document.location='tambah-gejala.php'
	</script>
	<?php
	
}

?>




