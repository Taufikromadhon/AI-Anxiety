<?php 
include('akses-pakar.php'); 
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pakar AI Anxiety</title>
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
                    <a href="#"><img src="gambar/pakar-cms-logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                                <ul class="collapse">
                                    <li><a href="dashboard-pakar.php">Profil Pakar</a></li>
                                    <li><a href="ubah-password-pakar.php">Ubah Password</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-envelope"></i><span>Pertanyaan                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="lihat-tanya.php">Lihat Pertanyaan</a></li>
                                </ul>
                            </li>
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-pencil-square-o"></i><span>Berita                                    </span></a>
                                <ul class="collapse">
                                    <li class="active"><a href="lihat-berita.php">Lihat Berita</a></li>
                                    <li><a href="tambah-berita.php">Tambah Berita</a></li>
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
                            <h3 class="page-title pull-left">Lihat Berita</h3>
                           
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                     
                    </div>
                </div>
            </div>
            <!-- page title area end -->
        <div class="container" style="max-width: 80%;">
                <div class="col-12 mt-5">
                        <div class="card bg-primary">
                             
                                <div class="single-table">
                                    <div class="table-responsive">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h4>Data Berita</h4>    
                                    </div>
                                    <div class="col-sm-6 text-right" style="align-content: right;" >
                                        <a href="tambah-berita.php">Tambah Berita Baru!</a>
                                    </div>
                                </div>
                            </div>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Judul</th>
                                                    <th scope="col">Tanggal</th>
                                                    <th scope="col">Penulis</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Aksi</th>  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    include 'koneksi.php';
                                                    $no = 1;
                                                    $databerita = mysqli_query($con,"select * from berita");
                                                    while($data = mysqli_fetch_array($databerita)){
                                                    ?> 
                                                <tr>
                                                    <?php  ?>
                                                    <td><?php echo $data['id_berita']; ?></td>
                                                    <td><?php echo $data['judul']; ?></td>
                                                    <td><?php echo $data['tanggal_berita']; ?>
                                                    </td>
                                                    <td><?php  $id_pakar = $data['id_pakar']; 
                                                        $query_penulis = mysqli_query($con, "SELECT * FROM pakar WHERE id_pakar='$id_pakar'");
                                                        //$result = mysqli_query($conn, $query);
                                                        while ($row = mysqli_fetch_array( $query_penulis)) {   
                                                            echo $row['nama_lengkap'] ; 
                                                        
                                                        }
                                                        ?>
                                                            
                                                    </td>
                                                    <td><?php echo $data['status_postingan']; ?></td>
                                                    <td>
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="mr-2"><a href="baca-berita-anxiety.php?judul=<?php  $id_pakar = $data['id_pakar']; 
                                                        $query_berita = mysqli_query($con, "SELECT * FROM berita WHERE id_berita='$no'");
                                                        //$result = mysqli_query($conn, $query);
                                                        while ($row = mysqli_fetch_array( $query_berita)) {   
                                                            echo $row['link_berita'] ; 
                                                        
                                                        }
                                                        ?>"   class=""><i class="ti-book"></i></a></li>

                                                            <li class="mr-1">
                                                                <a href="edit-berita.php?id=<?php echo $data['id_berita'];  ?>" class="open_modal" 
                                                                ><i class="fa fa-edit"></i></a></li>

                                                            
                                                            <li><a href="delete-data-berita.php?id=<?php echo $data['id_berita']; ?>" onclick="return confirm('Yakin Hapus?')" class="text-danger"><i class="ti-trash"></i></a></li>
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
                    <!-- Progress Table inti data pakar end -->
                       
           
                    
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
            <a class="btn btn-primary" href="logout-pakar-proses.php">Ya</a>
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
