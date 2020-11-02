<?php
include('akses-admin.php'); 
require_once("koneksi.php");

mysqli_query($con, "DELETE From pakar where id_pakar='".$_SESSION['id_pakar']."'");

$sql="SELECT * FROM pakar WHERE id_pakar='".$_SESSION['id_pakar']."'";


$result=mysqli_query($con, $sql);
$count=mysqli_num_rows($result);

if($count==1){
?>
	<script language="JavaScript">
	alert('Penghapusan gagal..');
	document.location='lihat-daftar-pakar.php'
	</script>

<?php 
}
	else{
	$_SESSION['id_pakar']='';
	unset($_SESSION['id_pakar']);
?>
	<script language="JavaScript">
	alert('Selamat, Penghapusan Berhasil!');
	document.location='lihat-daftar-pakar.php'
	</script>


<?php 
	
}

?>