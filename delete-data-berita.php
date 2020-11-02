<?php
include('akses-pakar.php'); 
require_once("koneksi.php");

$id = $_GET['id'];


$query=mysqli_query($con, "DELETE From berita where id_berita='".$id."' ");



$sql="SELECT * FROM berita WHERE id_berita='".$id."'";


$result=mysqli_query($con, $sql);
$count=mysqli_num_rows($result);

if($count==1){
?>
    <script language="JavaScript">
     alert('Sepertinya ada yang salah! Data Berita Belum Bisa Dihapus!');
    document.location='lihat-berita.php'
    </script>

<?php 
}
    else{
?>
    <script language="JavaScript">
    alert('Selamat, Penghapusan Berita Berhasil!');
    document.location='lihat-berita.php'
    </script>


<?php 
    
}

?>

