<?php
//include('dbconnected.php');
include('koneksi.php');

$idtanya = $_GET['id-tanya'];
$statustanya = $_GET['status-tanya'];

//query update
$query = "UPDATE tanya SET status='$statustanya' WHERE id_tanya='$idtanya' ";

if (mysqli_query($con, $query)) {
	# credirect ke page index
	header("location:lihat-tanya.php");	
}
else{

	?>
	<script language="JavaScript">
	alert('ERROR, data gagal diupdate');
	//document.location='lihat-tanya.php'
	</script>
	<?php

}

//mysql_close($host);
?>
