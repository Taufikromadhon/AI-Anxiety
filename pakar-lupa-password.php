<?php 
include('sudah-login-pakar.php'); 
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login Pakar</title>
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
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form action="pakar-lupa-password-proses.php" method="POST">
                    <div class="login-form-head">
                        <h4>Reset Password</h4>
                        <p>Silahkan masukan username Anda, dan masukan password baru yang diinginkan!</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="username">Username</label>
                            <input type="text" name="pakar-username" id="username" min="1" maxlength="24" required>
                            <i class="ti-user"></i>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="pakar-password" min="1" maxlength="10" id="pass" required>
                            <i class="ti-lock"></i>
                        </div>
                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                 
                            </div>
                            <div class="col-6 text-right">
                                <a href="login-pakar.php">Sudah ingat password?</a>
                            </div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit" name="submit">Reset Password <i class="ti-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

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