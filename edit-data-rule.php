<?php
//include('dbconnected.php');
include('koneksi.php');

$id_rule = $_GET['id_rule'];
$id_gejala = $_GET['id-gejala-pilihan'];
//$id_penyakit = $_GET['id_penyakit'];
$nilai = $_GET['nilai-rule-pilihan'];




$jumlah = count($_GET['id-penyakit']); //menghitung jumlah value yang di centang
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
           		$outputnya[]= $_GET['id-penyakit'][$i].$pelengkap;         	
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
			$floatnilai = floatval($nilai); 


		

			$tambahrule=mysqli_query($con, "UPDATE rule SET id_gejala='$id_gejala' , id_penyakit='$idpenyakitpilihan' , nilai='$floatnilai' WHERE id_rule='$id_rule' ");

			if ($tambahrule==1) {
			# credirect ke page index
			?>
				<script language="JavaScript">
				alert('Selamat, Rule Berhasil Ditambah!!');
				document.location='lihat-rule.php'
				</script>
				<?php

			}
			else{
			?>
				<script language="JavaScript">
				alert('Periksa isian data! Rule Gagal Diperbaharui!');
				document.location='lihat-rule.php'
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






















//query update




//mysql_close($host);
?>