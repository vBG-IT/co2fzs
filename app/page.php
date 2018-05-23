<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $REL_PATH; ?>assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?php echo $REL_PATH; ?>assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>CO&#8322;-frei zur Schule</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="<?php echo $REL_PATH; ?>assets/fonts/Montserrat/Montserrat.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo $REL_PATH; ?>assets/fonts/fontawesome/css/font-awesome.css" />
    <!-- CSS Files -->
    <link href="<?php echo $REL_PATH; ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo $REL_PATH; ?>assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />

</head>

<body class="index-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="http://demos.creative-tim.com/now-ui-kit/index.html" rel="tooltip" title="Designed by Invision. Coded by Creative Tim" data-placement="bottom" target="_blank">
                    Now Ui Kit
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
                            <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                            <p>Download</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $REL_PATH; ?>documentation/tutorial-components.html" target="_blank">
                            <i class="now-ui-icons files_paper"></i>
                            <p>Components</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-neutral" href="https://www.creative-tim.com/product/now-ui-kit-pro" target="_blank">
                            <i class="now-ui-icons arrows-1_share-66"></i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">
                            <i class="fa fa-twitter"></i>
                            <p class="d-lg-none d-xl-none">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
                            <i class="fa fa-instagram"></i>
                            <p class="d-lg-none d-xl-none">Instagram</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">
      <div class="page-header clear-filter" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-image: url('<?php echo $REL_PATH; ?>assets/img/wald-2.jpg');">
      </div>
      <div class="container">
        <div class="content-center brand">
          <img class="n-logo" src="<?php echo $REL_PATH; ?>assets/img/now-logo.png" alt="">
          <h1 class="h1-seo">Now UI Kit.</h1>
          <h3>A beautiful Bootstrap 4 UI kit. Yours free.</h3>
        </div>
        <h6 class="category category-absolute">Designed by
        <a href="http://invisionapp.com/" target="_blank">
          <img src="<?php echo $REL_PATH; ?>assets/img/invision-white-slim.png" class="invision-logo" />
        </a>. Coded by
        <a href="https://www.creative-tim.com" target="_blank">
          <img src="<?php echo $REL_PATH; ?>assets/img/creative-tim-white-slim2.png" class="creative-tim-logo" />
        </a>.</h6>
      </div>
    </div>
    <div class="main">
      <br><br><br><br><br><br><br><br><br><br>
    </div>
    <footer class="footer" data-background-color="black">
      <div class="container">
        <nav>
          <ul>
            <li>
              <a href="https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md">
                MIT License
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright">
          &copy;
          , Designed by
          <a href="http://www.invisionapp.com" target="_blank">Invision</a>. Coded by
          <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
        </div>
      </div>
    </footer>
  </div>
</body>
<!--   Core JS Files   -->
<script src="<?php echo $REL_PATH; ?>assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo $REL_PATH; ?>assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?php echo $REL_PATH; ?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?php echo $REL_PATH; ?>assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?php echo $REL_PATH; ?>assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="<?php echo $REL_PATH; ?>assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Share Library etc -->
<script src="<?php echo $REL_PATH; ?>assets/js/plugins/jquery.sharrre.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="<?php echo $REL_PATH; ?>assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>

</html>
