<?php
session_start();
require_once("koneksi.php");


$myusername=$_POST['username'];
$mypassword= ($_POST['password']);

$sql="SELECT * FROM admin WHERE username='".$myusername."' And password='".$mypassword."'";

$result=mysqli_query($con, $sql);

$count=mysqli_num_rows($result);

if($count==1){
$_SESSION['user']=$myusername;
$_SESSION['pass']=$mypassword;
?>

<script language="JavaScript">
alert('Selamat, Login Anda Sukses!!');
document.location='dashboard-admin.html'
</script>

<?php 
}
else{
  echo "gagal";
  ?>



<?php 
  
}

?>