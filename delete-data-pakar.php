<?php
include('akses-admin.php'); 
require_once("koneksi.php");

$id = $_GET['id'];


mysqli_query($con, "DELETE From pakar where id_pakar='".$id."'");



$sql="SELECT * FROM pakar WHERE id_pakar='".$id."'";


$result=mysqli_query($con, $sql);
$count=mysqli_num_rows($result);

if($count==1){
?>
    <script language="JavaScript">
     alert('Periksa apakah masih ada peranan data yang tertinggal! Opsi merubah password secara sepihak mungkin bisa dilakukan!');
    document.location='lihat-daftar-pakar.php'
    </script>

<?php 
}
    else{
?>
    <script language="JavaScript">
    alert('Selamat, Penghapusan Berhasil!');
    document.location='lihat-daftar-pakar.php'
    </script>


<?php 
    
}

?>

