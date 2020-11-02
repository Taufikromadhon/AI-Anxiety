
<?php
include('koneksi.php');
include('sudah-login-pakar.php'); 

$myusername=$_POST['pakar-username'];
$mypassword= ($_POST['pakar-password']);

$sql="SELECT * FROM pakar WHERE username='".$myusername."'";

$result=mysqli_query($con, $sql);

$count=mysqli_num_rows($result);

if($count==1){

$queryupdate = mysqli_query($con, "UPDATE pakar SET password='$mypassword' WHERE username='$myusername'");
	if ($queryupdate==1){
		?>
		<script language="JavaScript">
   	 	alert('Selamat, perubahan password berhasil!');
 		document.location='login-pakar.php';
 		</script>

		<?php

		}
	else{?>
		<script language="JavaScript">
    	alert('Password gagal dirubah! Periksa kembali username Anda!');
    	document.location='pakar-lupa-password.php'
    	</script>

	<?php }
}

else{
	
	?>
	<script language="JavaScript">
 	alert('Password gagal dirubah! Periksa kembali username Anda!');
    document.location='pakar-lupa-password.php';
    </script>



<?php 
	
}

?>


