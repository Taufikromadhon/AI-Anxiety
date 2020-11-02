<?php
session_start();
require_once("koneksi.php");

$idrulebaru= $_POST['id-rule-baru'];
$idgejalapilihan=$_POST['id-gejala-pilihan'];
//$idpenyakitpilihan= $_POST['gejala-baru-pertanyaan'];
$nilairule= $_POST['nilai-rule'];



$sql="SELECT * FROM rule WHERE id_rule='".$idrulebaru."'";

$result=mysqli_query($con, $sql);

$count=mysqli_num_rows($result);

if($count==1){
	?>
			<script language="JavaScript">
			alert('Periksa isian data! ID Rule Terduplikasi! Isikan ulang dengan ID rule yang belum terpakai!');
			document.location='tambah-rule.php'
			</script>
			<?php
	
	
	
}
else{
	//START checking Id penyakit sudah terpilih atau belum
	//error_reporting(0);
	$jumlah = count($_POST['id-penyakit']); //menghitung jumlah value yang di centang
		if ($jumlah>0) {
			$a=0;
			for($i=0; $i<$jumlah; $i++){		
				$a++;
				if ($a<$jumlah) {
					$pelengkap=", ";
				}
				else {
					$pelengkap=".";
				}
           		$outputnya[]= $_POST['id-penyakit'][$i].$pelengkap;         	
			}

			for ($i=0; $i < $jumlah ; $i++) { 
				$outputnya[$i];
				$kalimat = implode($outputnya);
			}
			//echo "";
			//echo "<br>";
			//echo "Id Penyakit Pilihan";
			//echo "<br>";
			$idpenyakitpilihan=$kalimat;
			$floatnilairule = floatval($nilairule); 


			$tambahrule=mysqli_query($con, "INSERT INTO rule (id_rule, id_gejala, id_penyakit, nilai) VALUES ('$idrulebaru','$idgejalapilihan','$idpenyakitpilihan', '$floatnilairule')");

			if ($tambahrule==1) {
			# credirect ke page index
			?>
				<script language="JavaScript">
				alert('Selamat, Rule Berhasil Ditambah!!');
				document.location='tambah-rule.php'
				</script>
				<?php

			}
			else{
			?>
				<script language="JavaScript">
				alert('Periksa isian data! Id Rule Gagal Ditambahkan!');
				document.location='tambah-rule.php'
				</script>
			<?php
	
			}

		}
		else{
			
		?>
			<script language="JavaScript">
			alert('Periksa isian data! Penyakit belum Anda pilih!');
			//document.location='tambah-rule.php'
			</script>
			<?php
	
		}
	}
			
		

?>


<?php
/**
echo"$selected_hobby";
//END checking Id penyakit sudah terpilih atau belum



$tambahgejala=mysqli_query($con, "INSERT INTO gejala (id_gejala, nama_gejala, pertanyaan, keterangan_gejala) VALUES ('$idgejalabaru', '$namagejalabaru', '$definisigejalabaru', '$solusigejalabaru')");


if ($tambahgejala==1) {
	# credirect ke page index
	?>
	<script language="JavaScript">
	alert('Selamat, Gejala Berhasil Ditambah!!');
	document.location='tambah-gejala.php'
	</script>
	<?php


}
else{
	?>
	<script language="JavaScript">
	alert('Periksa isian data! ID Gejala Terduplikasi!');
	document.location='tambah-gejala.php'
	</script>
	<?php
	
}**/

?>




