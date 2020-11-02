<?php
session_start();
require_once("koneksi.php");

//autoincrement
$idberita= $_POST['id-berita'];

$linkberita=$_POST['link-berita'];
$judulberita=$_POST['judul-berita'];
$isiberita=$_POST['isi-berita'];
$idpenulisberita=$_SESSION['id-pakar-login'];
$tanggalberita=$_POST['tanggal-berita'];
$gambarberita=$_FILES['gambar-berita']['name'];
$tmp=$_FILES['gambar-berita']['tmp_name'];
$statusberita=$_POST['status-berita'];

$target="data/".$gambarberita;
if (file_exists($target)) {
	unlink($target);
}


$path="filegambar/".$gambarberita;

if (move_uploaded_file($tmp, $path)) {


	$query = "UPDATE berita SET link_berita='$linkberita', judul='$judulberita', isi_berita='$isiberita', id_pakar='$idpenulisberita', tanggal_berita='$tanggalberita', gambar='$gambarberita', status_postingan='$statusberita' WHERE id_berita='$idberita'";


	if (mysqli_query($con, $query)) {
	# credirect ke page index
		header('location:edit-berita.php?id='.$idberita.'');
		
	}
	else{
		?>
		<script language="JavaScript">
		alert('Periksa isian data!');
		</script>
		<?php
		header('location:edit-berita.php?id='.$idberita.'');
	
	}

}
else{
	?>
		<script language="JavaScript">
		alert('Upload gambar gagal!');

		</script>
		<?php
		header('location:edit-berita.php?id='.$idberita.'');
}
?>




