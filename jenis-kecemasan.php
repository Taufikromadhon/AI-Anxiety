<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AI Anxiety</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="ini.css">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

  </head>

  <body id="page-top">

     <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php#page-top">AI Anxiety</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" style="margin-left: 550px">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#tentangAnxiety">Tentang Anxiety</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="berita-anxiety.php">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#timaiAnxiety">Tim AI Anxiety</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#ambiltes">Ambil Tes</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div style="margin-right: 20px; align-self: center;" >

      <?php 
            include 'koneksi.php';
            $kecemasan = $_GET['jenis'] ; 
            $query = "SELECT * from penyakit WHERE nama_penyakit='$kecemasan'";
            $result=mysqli_query($con,$query);            
            while($data = mysqli_fetch_array ($result)){
          ?>
  
    <section id="" >     
       <div class="row " style="margin-right: -20px;">
          <div class="col-lg-6 mx-auto" style="">
              <h2><?php echo $data['nama_penyakit']; ?></h2>
_______
<br>
<br>
<?php echo $data['definisi_solusi']; ?>

             
          </div>
      </div>
    </section>
<?php }
?>
    <!-- Footer -->
    <footer class="py-5 bg-dark" style="margin-right: -20px;">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Tim AI Anxiety 2018-2019</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>
    </div>
  </body>

</html>
