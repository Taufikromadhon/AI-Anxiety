<?php 
include('akses-admin.php'); 
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin AI Anxiety</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets-cms/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets-cms/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets-cms/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets-cms/css/themify-icons.css">
    <link rel="stylesheet" href="assets-cms/css/metisMenu.css">
    <link rel="stylesheet" href="assets-cms/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets-cms/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets-cms/css/typography.css">
    <link rel="stylesheet" href="assets-cms/css/default-css.css">
    <link rel="stylesheet" href="assets-cms/css/styles.css">
    <link rel="stylesheet" href="assets-cms/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets-cms/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="#"><img src="gambar/admin-cms-logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                                <ul class="collapse">
                                    <li><a href="dashboard-admin.php">Profil Admin</a></li>
                                    <li><a href="ubah-password-admin.php">Ubah Password</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-database"></i><span>Penyakit                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="lihat-penyakit.php">Lihat Tabel Penyakit</a></li>
                                    <li><a href="tambah-penyakit.php">Tambah Daftar Penyakit</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-database"></i><span>Gejala                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="lihat-gejala.php">Lihat Tabel Gejala</a></li>
                                    <li><a href="tambah-gejala.php">Tambah Daftar Gejala</a></li>
                                </ul>
                            </li>
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-database"></i><span>Rule                                    </span></a>
                                <ul class="collapse">
                                    <li class="active"><a href="lihat-rule.php">Lihat Tabel Rule</a></li>
                                    <li><a href="tambah-rule.php">Tambah Daftar Rule</a></li>
                                </ul>
                            </li>
                              <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-pencil-square-o"></i><span>Petunjuk                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="lihat-petunjuk.php">Lihat Daftar Petunjuk</a></li>
                                    <li><a href="tambah-petunjuk.php">Tambah Petunjuk</a></li>
                                </ul>
                            </li>
                              <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-stethoscope"></i><span>Pakar                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="lihat-daftar-pakar.php">Lihat Daftar Pakar</a></li>
                                    <li><a href="tambah-pakar.php">Tambah Pakar</a></li>
                                </ul>
                            </li>
                           
                           
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
       
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                      
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                   
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li class="">
                                
                                <a href="index.php"><i class="fa fa-home fa-2x"></i></a>
                            
                            </li>
                            <li class="">
                                <a href="" data-toggle="modal" data-target="#LogoutModal">
                                <i class="fa fa-sign-out fa-2x"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h3 class="page-title pull-left">Lihat RUle</h3>
                           
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                     
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <!-- Progress Table Inti Data Rule start -->
            <div class="container" style="max-width: 80%;">
           

               
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h4>Daftar Rule AI Anxiety</h4>    
                                    </div>
                                    <div class="col-sm-6 text-right" style="align-content: right;" >
                                        <a href="tambah-rule.php">+ Tambah Rule</a>
                                    </div>
                                </div>
                            </div>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    
                                                    <th scope="col">ID Rule</th>
                                                    <th scope="col">ID Gejala</th>
                                                    <th scope="col">ID Penyakit</th>
                                                    <th scope="col">Nilai</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <?php 
                                                    include 'koneksi.php';
                                                    $no = 1;
                                                    $datarule = mysqli_query($con,"select * from rule");
                                                    while($data = mysqli_fetch_array($datarule)){
                                                    ?>
                                                <tr>
                                                    <?php $no++; ?>
                                                    <td><?php echo $data['id_rule']; ?></td>
                                                    <td><?php echo $data['id_gejala']; ?></td>
                                                    
                                                    <td><?php echo $data['id_penyakit']; ?></td>
                                                    <td><?php echo $data['nilai']; ?></td>
                                                    <td>
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="mr-3">
                                                                <a href="#" class="open_modal" id='<?php echo  $data['id_rule'];?>' data-toggle="modal" data-target="#myModal<?php echo $data['id_rule']; ?>"
                                                                ><i class="fa fa-edit"></i></a></li>
                                                            
                                                            <li><a href="delete-data-rule.php?id=<?php echo $data['id_rule']; ?>" onclick="return confirm('Yakin Hapus?')" class="text-danger"><i class="ti-trash"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                
                                                    <?php 
                                                        }
                                                    ?>


                                                
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Progress Table inti data penyakit end -->
                     <!-- Cek cek -->


                    <?php 
                        $query = mysqli_query($con, "SELECT * FROM rule");
                        $no = 1;
                        while ($data = mysqli_fetch_assoc($query)) 
                        {
                        ?>
           
                        <!-- Modal Edit penyakit-->
                        <div class="modal fade" id="myModal<?php echo $data['id_rule']; ?>" role="dialog">
                            <div class="modal-dialog">
              
                            <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        
                                        <h4 class="modal-title">Update Data Rule</h4>
                                    </div>
                                    <div class="modal-body">
                                    <form role="form" action="edit-data-rule.php" method="get">
                                       <?php
                                        $id_rule = $data['id_rule']; 
                                        $query_edit = mysqli_query($con, "SELECT * FROM rule WHERE id_rule='$id_rule'");
                                        //$result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_array( $query_edit)) {  
                                       ?>
                                       <input type="hidden" name="id_rule" value="<?php echo $row['id_rule']; ?>">
                                        <div class="form-group">
                                            <label>Id Gejala</label>
                                            <select name="id-gejala-pilihan" class="form-control input-lg"  required>
                                                    <option value="<?php echo $row['id_gejala']; ?>" selected><?php echo $row['id_gejala']; ?> (Gejala saat ini)</option>
                                                    <option value="G01">G01</option>
                                                    <option value="G02">G02</option>
                                                    <option value="G03">G03</option>
                                                    <option value="G04">G04</option>
                                                    <option value="G05">G05</option>
                                                    <option value="G06">G06</option>
                                                    <option value="G07">G07</option>
                                                    <option value="G08">G08</option>
                                                    <option value="G09">G09</option>
                                                    <option value="G10">G10</option>
                                                    <option value="G11">G11</option>
                                                    <option value="G12">G12</option>
                                                    <option value="G13">G13</option>
                                                    <option value="G14">G14</option>
                                                    <option value="G15">G15</option>
                                                    <option value="G16">G16</option>
                                                    <option value="G17">G17</option>
                                                    <option value="G18">G18</option>
                                                    <option value="G19">G19</option>
                                                    <option value="G20">G20</option>
                                                    <option value="G21">G21</option>
                                                    <option value="G22">G22</option>
                                                    <option value="G23">G23</option>
                                                    <option value="G24">G24</option>
                                                    <option value="G25">G25</option>
                                                    <option value="G26">G26</option>
                                                </select>      
                                        </div>
                                        <div class="form-group">
                                            <label>Id Penyakit</label>
                                            <?php
                                            
                                            $nama = " ". $row['id_penyakit'];
                                            $idpenyakit=$nama;

                                            $M1=strpos($idpenyakit,"M1");
                                                if ($M1){
                                                    $hasilM1="checked";                                                    
                                                }
                                                else {
                                                    $hasilM1=" ";
                                                }
                                            $M2=strpos($idpenyakit,"M2");
                                                if ($M2){
                                                    $hasilM2="checked";                                                    
                                                }
                                                else {
                                                    $hasilM2=" ";
                                                }
                                            $M3=strpos($idpenyakit,"M3");
                                                if ($M3){
                                                    $hasilM3="checked";                                                    
                                                }
                                                else {
                                                    $hasilM3=" ";
                                                }
                                            $K1=strpos($idpenyakit,"K1");
                                                if ($K1){
                                                    $hasilK1="checked";                                                    
                                                }
                                                else {
                                                    $hasilK1=" ";
                                                }
                                            $K2=strpos($idpenyakit,"K2");
                                                if ($K2){
                                                    $hasilK2="checked";                                                    
                                                }
                                                else {
                                                    $hasilK2="";
                                                }
                                            $K3=strpos($idpenyakit,"K3");
                                                if ($K3){
                                                    $hasilK3="checked";                                                    
                                                }
                                                else {
                                                    $hasilK3=" ";
                                                }
                                            $K4=strpos($idpenyakit,"K4");
                                                if ($K4){
                                                    $hasilK4="checked";                                                    
                                                }
                                                else {
                                                    $hasilK4=" ";
                                                }    
                                              
                                                
                                            ?>
                                            <div class="row">
                                                    <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
                                                    <input type="checkbox" name="id-penyakit[]" value="M1" <?php echo $hasilM1 ; ?>/>M1 Kecemasan Rasional<br />    
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
                                                    <input type="checkbox" name="id-penyakit[]" value="M2" <?php echo $hasilM2 ; ?>/>M2 Kecemasan Irasional<br />    
                                                    </div>
                                                    <div class="ccol-md-4 col-xs-4 col-sm-4 col-lg-4">
                                                    <input type="checkbox" name="id-penyakit[]" value="M3" <?php echo $hasilM3 ; ?>/>M3 Kecemasan Fundamental<br />    
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
                                                    <input type="checkbox" name="id-penyakit[]" value="K1" <?php echo $hasilK1 ; ?>/>K1 Kecemasan Ringan Sebentar<br />    
                                                    </div>
                                                    <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
                                                    <input type="checkbox" name="id-penyakit[]" value="K2" <?php echo $hasilK2 ; ?>/>K2 Kecemasan Ringan Lama<br />    
                                                    </div>
                                                    <div class="ccol-md-3 col-xs-3 col-sm-3 col-lg-3">
                                                    <input type="checkbox" name="id-penyakit[]" value="K3" <?php echo $hasilK3 ; ?>/>K3 Kecemasan Berat Sebentar<br />    
                                                    </div>
                                                    <div class="ccol-md-3 col-xs-3 col-sm-3 col-lg-3">
                                                    <input type="checkbox" name="id-penyakit[]" value="K4" <?php echo $hasilK4 ; ?>/>K4 Kecemasan Berat Lama<br />    
                                                    </div>
                                                </div>


                                                
                                        </div>
                                        <div class="form-group">
                                            <label for="nilai-rule-pilihan">Nilai Rule</label>
                                                <select name="nilai-rule-pilihan" class="form-control" required>
                                                    <option value="<?php echo $row['nilai']; ?>" selected><?php echo $row['nilai']; ?> (Nilai saat ini)</option>
                                                    <option value="0">0</option> 
                                                    <option value="1">1</option>
                                                    <option value="1.5">1.5</option>
                                                    <option value="3">3</option>
                                                    <option value="7">7</option>
                                                    <option value="11">11</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option> 
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option> 
                                                </select>
                                          
                                        </div>
                                        <div class="modal-footer">  
                                            <button type="submit" class="btn btn-success">Update</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                        <?php 
                                        }
                                        //mysql_close($host);
                                        ?>        
                                    </form>
                                </div>
                            </div>       
                        </div>
                    </div>
                    <?php               
                    } 
                    ?>   

                <!-- cek cek end -->
                </div>
             




 <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2018-2019. Tim AI Anxiety. Design Inspired From : <a href="https://colorlib.com/wp/">Colorlib</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
   
    <!-- offset area end -->

         <!-- Logout Modal-->
    <div class="modal fade" id="LogoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
          
            <h5 class="modal-title" id="exampleModalLabel"><br>
          <br>Apakah Anda Yakin?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Pilih "Ya" untuk Logout.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout-admin-proses.php">Ya</a>
          </div>
        </div>
      </div>
    </div>

    <!-- End Of Logout Modal-->



    <!-- jquery latest version -->
    <script src="assets-cms/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets-cms/js/popper.min.js"></script>
    <script src="assets-cms/js/bootstrap.min.js"></script>
    <script src="assets-cms/js/owl.carousel.min.js"></script>
    <script src="assets-cms/js/metisMenu.min.js"></script>
    <script src="assets-cms/js/jquery.slimscroll.min.js"></script>
    <script src="assets-cms/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets-cms/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets-cms/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets-cms/js/plugins.js"></script>
    <script src="assets-cms/js/scripts.js"></script>
</body>

</html>
