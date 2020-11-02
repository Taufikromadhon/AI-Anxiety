<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--load all styles -->
      <link href="fontawesome/css/all.css" rel="stylesheet"> 

    <title>Tes AI Anxiety</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="ini.css">
<link rel="stylesheet" href="login.css">
    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">



</head>
<body>
<div class="col-md-4 col-md-offset-4 form-login" style="margin-top: 10%; ">
    
    <?php
    /* handle error */
    if (isset($_GET['error'])) : ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
        </div>
    <?php endif;?>

        <div class="outter-form-login" >
        <div class="logo-login">
          <center>
            <em class="fas fa-user-tie fa-5x"></em>
            </center>
        </div>
            <form action="check-login.php" class="inner-login" method="post">
            <h3 class="text-center title-login">Login Admin</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                
                <input type="submit" class="btn btn-block btn-custom-green" value="Login" />
                
                <div class="text-center forget">
                   <a href="reset-pass-admin.php"> <p>Lupa Password?</p></a>
                </div>
            </form>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

</body>
</html>
