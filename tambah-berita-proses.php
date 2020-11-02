<?php
session_start();
require_once("koneksi.php");

//autoincrement
//$idberitabaru= $_POST['id-berita-baru'];

$linkberitabaru=$_POST['link-berita-baru'];
$judulberitabaru=$_POST['judul-berita-baru'];
$isiberitabaru=$_POST['isi-berita-baru'];
$idpenulisberita=$_SESSION['id-pakar-login'];
$tanggalberitabaru=$_POST['tanggal-berita-baru'];
$gambarberitabaru=$_FILES['gambar-berita-baru']['name'];
$tmp=$_FILES['gambar-berita-baru']['tmp_name'];
$statusberitabaru=$_POST['status-berita-baru'];

$path="filegambar/".$gambarberitabaru;

if (move_uploaded_file($tmp, $path)) {



	$tambahberita=mysqli_query($con, "INSERT INTO berita (link_berita, judul, isi_berita, id_pakar, tanggal_berita, gambar, status_postingan) VALUES ('$linkberitabaru', '$judulberitabaru', '$isiberitabaru', '$idpenulisberita', '$tanggalberitabaru', '$gambarberitabaru', '$statusberitabaru')");


	if ($tambahberita==1) {
	# credirect ke page index
		?>
		<script language="JavaScript">
		alert('Selamat, Berita Baru Berhasil Disimpan!');
		document.location='tambah-berita.php'
		</script>
		<?php


	}
	else{
		?>
		<script language="JavaScript">
		alert('Periksa isian data!');
		document.location='tambah-berita.php'
		</script>
		<?php
	
	}

}
else{
	?>
		<script language="JavaScript">
		alert('Upload gambar gagal!');
		document.location='tambah-berita.php'
		</script>
		<?php
}
?>




