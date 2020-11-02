<?php
include('akses-admin.php'); 
require_once("koneksi.php");

$id = $_GET['id'];


$query=mysqli_query($con, "DELETE From gejala where id_gejala='".$id."' ");



$sql="SELECT * FROM gejala WHERE id_gejala='".$id."'";


$result=mysqli_query($con, $sql);
$count=mysqli_num_rows($result);

if($count==1){
?>
    <script language="JavaScript">
     alert('Sepertinya ada yang salah! Data Gejala Belum Bisa Dihapus!');
    document.location='lihat-gejala.php'
    </script>

<?php 
}
    else{
?>
    <script language="JavaScript">
    alert('Selamat, Penghapusan Gejala Berhasil!');
    document.location='lihat-gejala.php'
    </script>


<?php 
    
}

?>

