<?php
include('akses-admin.php'); 
require_once("koneksi.php");

$id = $_GET['id'];


$query=mysqli_query($con, "DELETE From petunjuk where id_petunjuk='".$id."' ");



$sql="SELECT * FROM petunjuk WHERE id_petunjuk='".$id."'";


$result=mysqli_query($con, $sql);
$count=mysqli_num_rows($result);

if($count==1){
?>
    <script language="JavaScript">
     alert('Sepertinya ada yang salah! Data Petunjuk Belum Bisa Dihapus!');
    document.location='lihat-petunjuk.php'
    </script>

<?php 
}
    else{
?>
    <script language="JavaScript">
    alert('Selamat, Penghapusan Petunjuk Berhasil!');
    document.location='lihat-petunjuk.php'
    </script>


<?php 
    
}

?>

