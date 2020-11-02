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
                    <a href="index.html"><img src="gambar/admin-cms-logo.png" alt="logo"></a>
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
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-database"></i><span>Rule                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="lihat-rule.php">Lihat Tabel Rule</a></li>
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
                              <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-stethoscope"></i><span>Pakar                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="lihat-daftar-pakar.php">Lihat Daftar Pakar</a></li>
                                    <li class="active"><a href="tambah-pakar.php">Tambah Pakar</a></li>
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
                                
                                <a href="index.html"><i class="fa fa-home fa-2x"></i></a>
                            
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
                            <h3 class="page-title pull-left">Halaman Tambah Pakar</h3>
                           
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                     
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="container" style="max-width: 80%;">
                 <!-- basic form start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="tambah-pakar-proses.php" method="POST">
                                            <div class="login-form-head">
                                                <h4>Tambah Pakar</h4>
                                                <p>Isikan form berikut untuk menambahkan pakar.</p>
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" class="form-control" placeholder="Masukan Username" name="pakar-baru-username" minlength="1" maxlength="20" id="username" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" minlength="1" maxlength="10" name="pakar-baru-password" id="pass" required placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="namapakar">Nama Lengkap</label>
                                                <input type="text" class="form-control" name="pakar-baru-nama-lengkap" minlength="1" maxlength="30" id="username" placeholder="Masukan Nama Dan Gelar" required >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" name="pakar-baru-email" minlength="1" maxlength="100" id="pass"  placeholder="Enter email" required>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4" style="float: right;" >Submit</button>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- basic form end -->
                 



                
            </div>
     

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
