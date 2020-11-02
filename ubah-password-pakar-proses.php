<?php
include('koneksi.php');
include('akses-pakar.php'); 

$myid = $_SESSION['id-pakar-login'];
$myusername = $_SESSION['pakar-login'];
$mypassword = $_SESSION['pass-pakar-login'];
$passwordlama=$_GET['pakar-password-lama'];
$passwordbaru=$_GET['pakar-password-baru'];
$konfirmasipasswordbaru=$_GET['pakar-konfirmasi-password-baru'];


if ($mypassword==$passwordlama) {
	if ($passwordbaru==$konfirmasipasswordbaru) {
	$query = "UPDATE pakar SET password='$passwordbaru' WHERE id_pakar='$myid'";
		if (mysqli_query($con, $query)){
			unset($_SESSION['pass-pakar-login']);
			$_SESSION['pass-pakar-login']=$passwordbaru;

			?>
			<script language="JavaScript">
   			 	alert('Selamat, perubahan password berhasil!');
    			document.location='ubah-password-pakar.php'
   			 </script>

				<?php

				}
		else{?>
			<script language="JavaScript">
    		alert('Data Gagal Diupdate!');
    		//document.location='ubah-password-admin.php'
    		</script>

		<?php
		}

	}
	else{?>
	<script language="JavaScript">
    alert('Pastikan Password Baru Sudah Sesuai!');
    document.location='ubah-password-pakar.php'
    </script>

	<?php
	}
}
else{?>
	<script language="JavaScript">
    alert('Pastikan Password Lama Sudah Sesuai!');
    document.location='ubah-password-pakar.php'
    </script>

	<?php
	
}


?>


