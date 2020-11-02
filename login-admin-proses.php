<?php
session_start();
require_once("koneksi.php");


$myusername=$_POST['admin-username'];
$mypassword= ($_POST['admin-password']);

$result=mysqli_query($con,"SELECT id_admin FROM admin WHERE username='".$myusername."' And password='".$mypassword."'");

while ($row=$result->fetch_assoc()) {
	
$myadmin=$row['id_admin'];
}


$sql="SELECT * FROM admin WHERE username='".$myusername."' And password='".$mypassword."'";

$result=mysqli_query($con, $sql);

$count=mysqli_num_rows($result);

if($count==1){
$_SESSION['id-admin-login']=$myadmin;
$_SESSION['admin-login']=$myusername;
$_SESSION['pass-admin-login']=$mypassword;
?>

<script language="JavaScript">
alert('Selamat, Login Anda Sukses!');
document.location='dashboard-admin.php'
</script>

<?php 
}
else{
	?>
	<script language="JavaScript">
	alert('Harap masukan data Sign In yang Valid!');
	document.location='login-admin.php'
	</script>



<?php 
	
}

?>