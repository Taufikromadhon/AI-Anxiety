<?php
//include('dbconnected.php');
include('koneksi.php');

$id_petunjuk = $_GET['id-petunjuk'];
$isi_petunjuk = $_GET['isi-petunjuk'];

//query update
$query = "UPDATE petunjuk SET isi_petunjuk='$isi_petunjuk' WHERE id_petunjuk='$id_petunjuk' ";

if (mysqli_query($con, $query)) {
	# credirect ke page index
	header("location:lihat-petunjuk.php");	
}
else{

	?>
	<script language="JavaScript">
	alert('ERROR, data gagal diupdate');
	document.location='lihat-petunjuk.php'
	</script>
	<?php

}

//mysql_close($host);
?>
