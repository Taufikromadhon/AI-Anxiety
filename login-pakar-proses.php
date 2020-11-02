<?php
session_start();
require_once("koneksi.php");


$myusername=$_POST['pakar-username'];
$mypassword= ($_POST['pakar-password']);

$result=mysqli_query($con,"SELECT id_pakar FROM pakar WHERE username='".$myusername."' And password='".$mypassword."'");

while ($row=$result->fetch_assoc()) {
	
$mypakar=$row['id_pakar'];
}


$sql="SELECT * FROM pakar WHERE username='".$myusername."' And password='".$mypassword."'";

$result=mysqli_query($con, $sql);

$count=mysqli_num_rows($result);

if($count==1){
$_SESSION['id-pakar-login']=$mypakar;
$_SESSION['pakar-login']=$myusername;
$_SESSION['pass-pakar-login']=$mypassword;
?>

<script language="JavaScript">
alert('Selamat, Login Anda Sukses!!');
document.location='dashboard-pakar.php';
</script>

<?php 
}
else{
	
	?>
	<script language="JavaScript">
	alert('Harap masukan data Sign In yang Valid!');
	document.location='login-pakar.php';
	</script>




<?php 
	
}

?>