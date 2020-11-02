<?php 
session_start();
include('koneksi.php');

$g1=$_POST['g1']; 
$g2=$_POST['g2'];
//$g3=$_POST['g3'];
$g4=$_POST['g4'];
$g5=$_POST['g5'];
$g6=$_POST['g6'];
//$g7=$_POST['g7'];
$g8=$_POST['g8'];
$g9=$_POST['g9'];
$g10=$_POST['g10'];
//$g11=$_POST['g11'];
$g12=$_POST['g12'];
$g13=$_POST['g13'];
$g14=$_POST['g14'];
//$g15=$_POST['g15'];
$g55=$_POST['g55'];
//$g17=$_POST['g17'];
//$g18=$_POST['g18'];
//$g19=$_POST['g19'];
//$g20=$_POST['g20'];
$tes2=$_POST['tes2'];
$tes4=$_POST['tes4'];
$tes6=$_POST['tes6'];
$tes7=$_POST['tes7'];
$tes8=$_POST['tes8'];
$tes9=$_POST['tes9'];

$g1=floatval($g1); 
$g2=floatval($g2); 
$g4=floatval($g4); 
$g5=floatval($g5); 
$g6=floatval($g6); 
$g8=floatval($g8); 
$g9=floatval($g9); 
$g10=floatval($g10); 
$g12=floatval($g12); 
$g13=floatval($g13); 
$g14=floatval($g14); 
$g55=floatval($g55); 




$tes2=floatval($tes2); 
$tes4=floatval($tes4); 
$tes6=floatval($tes6); 
$tes7=floatval($tes7); 
$tes8=floatval($tes8); 
$tes9=floatval($tes9); 

//perumusan g55
					  if ($g55==16) {
					  	$g16=1;
					  	$g19=0;  
					  }
					  elseif ($g55==19) {
					  	$g16=0;
					  	$g19=1;  
					  }
					  else {
					  	$g16=0;
					  	$g19=0; 
					  }

//perumusan g1 dan g2

					  if ($g1==1) {
					  	$g1=1;
					  }
					  elseif ($g1==0) { 
					  	$g1=0.5;
					  }

					  if ($g2==1) {
					  	$g2=1;
					  }
					  elseif ($g2==0) { 
					  	$g2=0.5;
					  }

//Perumusan tes2
					  if ($tes2==3) {
					  	$g3=1.2;
					  	$g7=0;
					  	$g11=0; 
					  }
					  elseif ($tes2==7) { 
					  	$g3=0;
					  	$g7=1.2;
					  	$g11=0; 
					  }
					  elseif ($tes2==11) { 
					  	$g3=0;
					  	$g7=0;
					  	$g11=1.2; 
					  }
					  else  {
					  	$g3=0;
					  	$g7=0;
					  	$g11=0; 
					  }
					  $g3=floatval($g3); 
					  $g7=floatval($g7); 
					  $g11=floatval($g11); 


//perumusan tes4
					  if ($tes4==15) {
					  	$g15=1.3;
					  	$g18=0;  
					  }
					  elseif ($tes4==18) {
					  	$g15=0;
					  	$g18=1.3;  
					  }
					  else {
					  	$g15=0;
					  	$g18=0; 
					  }
					  $g15=floatval($g15); 
					  $g18=floatval($g18); 

//perumusan tes6
					  if ($tes6==17) {
					  	$g17=1.4;
					  	$g20=0;  
					  }
					  elseif ($tes6==20) {
					  	$g17=0;
					  	$g20=1.4;  
					  }
					  else {
					  	$g17=0;
					  	$g20=0; 
					  }
					  $g17=floatval($g17); 
					  $g20=floatval($g20); 

//perumusan tes7
					  if ($tes7==21) {
					  	$g21=1.5;
					  	$g24=0;  
					  }
					  elseif ($tes7==24) {
					  	$g21=0;
					  	$g24=1.5;  
					  }
					  else  {
					  	$g21=0;
					  	$g24=0; 
					  }
					  $g21=floatval($g21); 
					  $g24=floatval($g24); 


//perumusan tes8
					  if ($tes8==22) {
					  	$g22=1;
					  	$g25=0;  
					  }
					  elseif ($tes8==25) {
					  	$g22=0;
					  	$g25=1;  
					  }
					  else {
					  	$g22=0;
					  	$g25=0; 
					  }
					  $g22=floatval($g22); 
					  $g25=floatval($g25); 


//perumusan tes9
					  if ($tes9==23) {
					  	$g23=1;
					  	$g26=0;  
					  }
					  elseif ($tes9==26) {
					  	$g23=0;
					  	$g26=1;  
					  }
					  else  {
					  	$g23=0;
					  	$g26=0; 
					  }
					  $g23=floatval($g23); 
					  $g26=floatval($g26); 


//formula penetralisir

					  	$x3=$g1;
					  	$x7=$g1;
					  	$x11=$g1; 

					  if ($g3==1.2) {
					  	$x3=$g1;
					  	$x7=$g1/2;
					  	$x11=$g1/2; 
					  }
					  if ($g7==1.2) {
					  	$x3=$g1/2;
					  	$x7=$g1;
					  	$x11=$g1/2; 
					  }
					  if ($g11==1.2) {
					  	$x3=$g1/2;
					  	$x7=$g1/2;
					  	$x11=$g1; 
					  }
					  $x3=floatval($x3); 
					  $x7=floatval($x7); 
					  $x11=floatval($x11); 





					  $gm1=$x3;
					  $gm2=$x7;
					  $gm3=$x11;
					  $gm1=floatval($gm1); 
					  $gm2=floatval($gm2); 
					  $gm3=floatval($gm3); 





                  
                      //Teorema Mustamir
                                      
                            $m1=$g3+$g4+$g5+$g6+$gm1;
                            $m2=$g7+$g8+$g9+$g10+$gm2;
                            $m3=$g11+$g12+$g13+$g14+$gm3;

                            if ($m1>$m2 && $m1>$m3 ) {
                            	   $kecemasan1= "Kecemasan Rasional";
                                   $_SESSION['kecemasan1']=$kecemasan1;
                            }
                            elseif ($m2>$m1 && $m2>$m3) {
                                   $kecemasan1= "Kecemasan Irasional";
                                   $_SESSION['kecemasan1']=$kecemasan1;
                            }
                            elseif ($m3>$m1 && $m3>$m2) {
                                   $kecemasan1= "Kecemasan Fundamental";
                                   $_SESSION['kecemasan1']=$kecemasan1;
                            }
                            else  {
                            	   $kecemasan1= "Tidak ditemukan";
                                   $_SESSION['kecemasan1']=$kecemasan1;
                            }



//formula penetralisir

					  if ($g15==1.3) {
					  	$y1=$g2;
					  	$y2=$g2/2;
					  }
					  else{
					  	$y1=0;
					  	$y2=0;
					  }

					  if ($g18==1.3) {
					  	$y1=$g2/2;
					  	$y2=$g2; 
					  }
					  else{
					  	$y1=0;
					  	$y2=0;
					  } 
					  $y1=floatval($y1); 
					  $y2=floatval($y2);



					  if ($g21==1.5) {
					  	$z1=$g19;
					  	$z2=$g19/2;
					  }
					  else{
					  	$z1=0;
					  	$z2=0;
					  }
					  if ($g24==1.5) {
					  	$z1=$g19/2;
					  	$z2=$g19; 
					  }
					  else{
					  	$z1=0;
					  	$z2=0;
					  } 
					  $z1=floatval($z1); 
					  $z2=floatval($z2);




                //Teorema Kartono Kartini


                            $k1=$y1+$g15+$g16+$g17;
                            $k2=$y1+$g15+$g16+$g20;
                            $k3=$y2+$g18+$z1;+$g21+$g22+$g23;
                            $k4=$y2+$g18+$z2;+$g24+$g25+$g26;

                            if ($k1>$k2 && $k1>$k3 && $k1>$k4 ) {
                                   $kecemasan2= "Kecemasan Ringan Sebentar";
                                   $_SESSION['kecemasan2']=$kecemasan2;
                            }
                            elseif ($k2>$k1 && $k2>$k3 && $k2>$k4 ) {
                                   $kecemasan2= "Kecemasan Ringan Lama";
                                   $_SESSION['kecemasan2']=$kecemasan2;
                             }
                            elseif ($k3>$k1 && $k3>$k2 && $k3>$k4 ) {
                                   $kecemasan2= "Kecemasan Berat Sebentar";
                                   $_SESSION['kecemasan2']=$kecemasan2;
                             }
                            elseif ($k4>$k1 && $k4>$k2 && $k4>$k3 ) {
                                   $kecemasan2= "Kecemasan Berat Lama";
                                   $_SESSION['kecemasan2']=$kecemasan2;
                             }
                             else{
                             	   $kecemasan2= "Tidak ditemukan";
                                   $_SESSION['kecemasan2']=$kecemasan2;	
                             }


                if ($_SESSION['kecemasan1']  && $_SESSION['kecemasan2'] ) {
                	?>
					<script language="JavaScript">
					alert('Cermati hasil tesnya, simpan dengan fasilitas penangkap layar di perangkat Anda, dan manfaatkan dengan sebaik-baiknya!');
					document.location='hasil-tes-anxiety.php'
					</script>
					<?php 

                }
 


    ?>