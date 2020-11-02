<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/png" href="assets-cms/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets-cms/css/themify-icons.css">
    <link rel="stylesheet" href="assets-cms/css/font-awesome.min.css">

    <title>Blog AI Anxiety</title>

    <!-- Bootstrap core CSS -->
    <link href="assets-blog/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets-blog/css/blog-home.css" rel="stylesheet">

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

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="berita-anxiety.php"><i class="ti-home"></i> Beranda Blog AI Anxiety</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="berita-anxiety.php">Berita
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Tes AI Anxiety</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="form-tanya-anxiety.php">Tanya Anxiety</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="petunjuk-penggunaan.php">Petunjuk</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">Petunjuk Penggunaan
            <small>Web AI Anxiety</small>
          </h1>
           <div class=" ">
                        <div class="card">
                            <div class="card-body"> 
                                <div id="accordion2" class="according accordion-s2">
                                    
          <?php
            include 'koneksi.php';
            $no = 0;
            $datapetunjuk = mysqli_query($con,"select * from petunjuk");
            while($data = mysqli_fetch_array($datapetunjuk)){
          ?>
           <?php $no++; ?>

                                  <div class="card">
                                        <div class="card-header">
                                           <a class="collapsed card-link" data-toggle="collapse" href="#accordion2<?php echo $no; ?>">Petunjuk Ke-<?php echo $no; ?></a>
                                        </div>
                                        <div id="accordion2<?php echo $no; ?>" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <p><?php echo $data['isi_petunjuk']; ?></p>
                                            </div>
                                        </div>
                                    </div>
          


          <?php

        }
        ?>
 
                    <!-- accordion style 2 start -->
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- accordion style 2 end -->
                    

          

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

           <!-- Widget -->
          <div class="card my-4">
            <h5 class="card-header">Universitas Amikom Yogyakarta</h5>
            <div class="card-body">
              <div >
                <center>
                  <img class="img-circle img-responsive" style="max-width: 50%; max-height: 250%;" src="gambar/logo-amikom.png">
                </center>          
              </div>
            </div>
          </div>
          
        </div>

      </div>
      <!-- /.row -->

 
     </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright © Tim AI Anxiety 2018-2019</p>
      </div>
      <!-- /.container -->
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
