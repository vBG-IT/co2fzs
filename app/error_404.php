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

<body class="login-page sidebar-collapse">
    <div class="page-header" filter-color="green">
        <div class="page-header-image" style="background-image:url(<?php echo $REL_PATH; ?>assets/img/wald-1.jpg)"></div>
        <div class="container">
          <div class="card card-plain content-center">
            <h1>404 Not Found</h1>
            <p>Die Seite unter <code><?php echo $PATH.$_SERVER['PATH_INFO']; ?></code> existiert nicht.</p>
          </div>
        </div>
        <footer class="footer">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="<?php echo $PATH; ?>/p/main">
                                Home
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright">
                    <?php include("app/_incl_copy.php"); ?>
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
