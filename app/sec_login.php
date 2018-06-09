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
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="?p=main">CO&#8322;-frei zur Schule</a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $REL_PATH; ?>index.html">Back to Kit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/creativetimofficial/now-ui-kit/issues">Have an issue?</a>
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
    <div class="page-header" filter-color="green">
        <div class="page-header-image" style="background-image:url(<?php echo $REL_PATH; ?>assets/img/wald-1.jpg)"></div>
        <div class="container">
            <div class="col-md-4 content-center">
                <div class="card card-login card-plain">
                    <form class="form" method="POST" action="<?php echo $PATH; ?>/sec/do-login">
                        <div class="header header-primary text-center">
                            <div class="logo-container">
                                <img src="<?php echo $REL_PATH; ?>media/logo.png" alt="">
                            </div>
                        </div>
                        <div class="content">
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                                <input type="text" name="username" class="form-control" placeholder="Benutzername...">
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons text_caps-small"></i>
                                </span>
                                <input type="password" name="password" placeholder="Passwort..." class="form-control" />
                            </div>
                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Anmelden</button>
                        </div>
                        <div class="pull-left">
                            <h6>
                                <a href="?sec=register" class="link">Registrieren</a>
                            </h6>
                        </div>
                        <div class="pull-right">
                            <h6>
                                <a href="?sec=passoword-reset" class="link">Passwort vergessen?</a>
                            </h6>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="?p=main">
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
