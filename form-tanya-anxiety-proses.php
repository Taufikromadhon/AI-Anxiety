<?php
session_start();
require_once("koneksi.php");


$idtanyabaru= $_POST['id-tanya-baru'];
$namatanyabaru=$_POST['nama-tanya-baru'];
$emailtanyabaru= $_POST['email-tanya-baru'];
$isitanyabaru=$_POST['isi-tanya-baru'];
$tanggaltanyabaru= date("Y-m-d");
$statustanyabaru=$_POST['status-tanya-baru'];


$tambahtanya=mysqli_query($con, "INSERT INTO tanya (id_tanya, nama, email, isi_tanya, tgl_kirim, status) VALUES ('$idtanyabaru', '$namatanyabaru', '$emailtanyabaru', '$isitanyabaru', '$tanggaltanyabaru', '$statustanyabaru')");


if ($tambahtanya==1) {
	# credirect ke page index
	?>
	<script language="JavaScript">
	alert('Selamat, Pertanyaan Berhasil Diajukan!!');
	//document.location='form-tanya-anxiety.php'
	</script>
	<?php


}
else{
	?>
	<script language="JavaScript">
	alert('Periksa isian data! Pertanyaan Belum Berhasil Diajukan!');
	document.location='form-tanya-anxiety.php'
	</script>
	<?php
	
}

?>




