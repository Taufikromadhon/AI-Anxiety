<?php
include('koneksi.php');
include('akses-admin.php'); 

$myid = $_SESSION['id-admin-login'];
$myusername = $_SESSION['admin-login'];
$mypassword = $_SESSION['pass-admin-login'];
$passwordlama=$_GET['admin-password-lama'];
$passwordbaru=$_GET['admin-password-baru'];
$konfirmasipasswordbaru=$_GET['admin-konfirmasi-password-baru'];


if ($mypassword==$passwordlama) {
	if ($passwordbaru==$konfirmasipasswordbaru) {
	$query = "UPDATE admin SET password='$passwordbaru' WHERE id_admin='$myid'";
		if (mysqli_query($con, $query)){
			unset($_SESSION['pass-admin-login']);
			$_SESSION['pass-admin-login']=$passwordbaru;

			?>
			<script language="JavaScript">
   			 	alert('Selamat, perubahan password berhasil!');
    			document.location='ubah-password-admin.php'
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
    document.location='ubah-password-admin.php'
    </script>

	<?php
	}
}
else{?>
	<script language="JavaScript">
    alert('Pastikan Password Lama Sudah Sesuai!');
    document.location='ubah-password-admin.php'
    </script>

	<?php
	
}


?>


