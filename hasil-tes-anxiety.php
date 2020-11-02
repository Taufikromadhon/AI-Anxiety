<?php 
include('koneksi.php');
include('belum-ambil-tes-anxiety.php'); 
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tes AI Anxiety</title>

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
    
    
    <section id="tentangAnxiety" >     
       <div class="row " style="margin-right: -20px;">
          <div class="col-lg-8 mx-auto" style="margin-right: -20px;">

              
              <center><strong><h1>Hasil Tes Anxiety</h1></strong></center><br>
    <br>
    <br>
    <p>Meskipun hasil dari Tes Anxiety ini sifatnya belum mencapai angka 100%, berdasarkan analisa yang dilakukan oleh sistem dengan algoritma Forward Chaining, inilah hasilnya!</p><br>
    <p>
    Kamu memiliki kecenderungan yang lebih, untuk memiliki kecemasan jenis: <a href="jenis-kecemasan.php?jenis=<?php $kecemasan1= $_SESSION['kecemasan1']; echo $kecemasan1 ; ?>"> <?php $kecemasan1= $_SESSION['kecemasan1']; echo $kecemasan1 ; ?></a>.
    </p>
    <br>
    <p>Pada jenis tingkatan: <a href="jenis-kecemasan.php?jenis=<?php $kecemasan2= $_SESSION['kecemasan2']; echo $kecemasan2 ; ?>"> <?php $kecemasan2= $_SESSION['kecemasan2']; echo $kecemasan2 ; ?></a>.</p>
    <br>
    <p>Buka masing-masing penjelasan tentang jenis kecemasan pada Tab Baru untuk mendapatkan penjelasan lebih lanjut!</p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

           <div class="row">
           <a href="index.php" style="margin-left: 25%; margin-right: -50%;">                            
             <input type="submit" class="btn-lg btn-info" style="width: 500px; " name="submit" value="Kembali Ke Home!">
             </a> 
        </div>
          </div>
      </div>

     


    </section>


   


  
  

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
