<?php
session_start();
require_once("koneksi.php");


$idpetunjukbaru= $_POST['id-petunjuk-baru'];
$isipetunjukbaru= $_POST['isi-petunjuk-baru'];

$tambahpetunjuk=mysqli_query($con, "INSERT INTO petunjuk (id_petunjuk, isi_petunjuk) VALUES ('$idpetunjukbaru', '$isipetunjukbaru')");


if ($tambahpetunjuk==1) {
	?>
	<script language="JavaScript">
	alert('Selamat, Gejala Berhasil Ditambah!!');
	document.location='tambah-petunjuk.php'
	</script>
	<?php


}
else{
	?>
	<script language="JavaScript">
	alert('Periksa isian data! ID Petunjuk Terduplikasi!');
	document.location='tambah-petunjuk.php'
	</script>
	<?php
	
}

?>




