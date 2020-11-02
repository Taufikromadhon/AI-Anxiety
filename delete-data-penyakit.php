<?php
include('akses-admin.php'); 
require_once("koneksi.php");

$id = $_GET['id'];


$query=mysqli_query($con, "DELETE From penyakit where id_penyakit='".$id."' ");



$sql="SELECT * FROM penyakit WHERE id_penyakit='".$id."'";


$result=mysqli_query($con, $sql);
$count=mysqli_num_rows($result);

if($count==1){
?>
    <script language="JavaScript">
     alert('Sepertinya ada yang salah! Data Penyakit Belum Bisa Dihapus!');
    document.location='lihat-penyakit.php'
    </script>

<?php 
}
    else{
?>
    <script language="JavaScript">
    alert('Selamat, Penghapusan Penyakit Berhasil!');
    document.location='lihat-penyakit.php'
    </script>


<?php 
    
}

?>

