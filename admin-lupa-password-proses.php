
<?php
include('koneksi.php');
include('sudah-login-admin.php'); 

$myusername=$_POST['admin-username'];
$mypassword= ($_POST['admin-password']);


$sql="SELECT * FROM admin WHERE username='".$myusername."'";

$result=mysqli_query($con, $sql);

$count=mysqli_num_rows($result);

if($count==1){

	$queryupdate = mysqli_query($con, "UPDATE admin SET password='$mypassword' WHERE username='$myusername'");
		if ($queryupdate==1){
			?>
			<script language="JavaScript">
   		 	alert('Selamat, perubahan password berhasil!');
 			document.location='login-admin.php';
 			</script>

			<?php

			}
		else{?>
			<script language="JavaScript">
 		   	alert('Password gagal dirubah! Periksa kembali sistem atau tanyakan admin!');
    		document.location='admin-lupa-password.php'
    		</script>

		<?php }
}

else{
	
	?>
	<script language="JavaScript">
 	alert('Password gagal dirubah! Periksa kembali username Anda!');
    document.location='admin-lupa-password.php';
    </script>



<?php 
	
}

?>


