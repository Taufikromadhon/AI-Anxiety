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
            <li class="nav-item active">
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
            <li class="nav-item">
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

          <h1 class="my-4">Baca Berita
            <small>Web AI Anxiety</small>
          </h1>

          <!-- Blog Post -->
          <?php  
          include('koneksi.php');

          $linkberita = $_GET['judul']; 
          $query_berita = mysqli_query($con, "SELECT * FROM berita WHERE link_berita='$linkberita'");
           //$result = mysqli_query($conn, $query);
          while ($row = mysqli_fetch_array( $query_berita)) {   
                                            
          ?>

           
           <?php //$no++; ?>

           <div class="card mb-4">
            <img class="card-img-top" src="filegambar/<?php echo $row['gambar'];?>" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title"><?php echo $row['judul']; ?></h2>
              <p class="card-text"><?php echo $row['isi_berita'] ; ?></p>
               
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo $row['tanggal_berita']; ?> by
              <a href="#"></a><?php  $id_pakar = $row['id_pakar']; 
                                                        $query_penulis = mysqli_query($con, "SELECT * FROM pakar WHERE id_pakar='$id_pakar'");
                                                        //$result = mysqli_query($conn, $query);
                                                        while ($row = mysqli_fetch_array( $query_penulis)) {   
                                                            echo $row['nama_lengkap'] ; 
                                                        
                                                        }
                                                        ?>
            </div>
          </div>


                                 


          <?php

        }
        ?>

           
          
          

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

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
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
