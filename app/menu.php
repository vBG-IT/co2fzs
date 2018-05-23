
<!DOCTYPE html>
<html lang="de">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="Clemens" >

    <title>CO&#8322;-frei zur Schule</title>

    <!-- Homepage als App-->
        <!-- Allgemein -->
        <link rel="icon" href="<?php echo $REL_PATH; ?>media/logo50x50.png" />

        <!-- Apple -->
        <link rel="apple-touch-icon" href="<?php echo $REL_PATH; ?>media/logo500x500.png" />
        <link rel="apple-touch-icon-precomposed" href="<?php echo $REL_PATH; ?>media/logo500x500.png" />
        <link rel="apple-touch-startup-image" href="<?php echo $REL_PATH; ?>media/hintergrund.png">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <!-- Microsoft -->
        <meta name="application-name" content="CO&#8322;-frei zur Schule">
        <meta name="msapplication-starturl" content="http://kunstkombinat5.org/clerie/enviro/index.php">
        <!-- <meta name="msapplication-square150x150logo" content="images/logo.png"> -->
        <!-- <meta name="msapplication-square310x310logo" content="images/largelogo.png"> -->
        <!-- <meta name="msapplication-square70x70logo" content="images/tinylogo.png"> -->
        <!-- <meta name="msapplication-wide310x150logo" content="images/widelogo.png"> -->
        <!-- <meta name="msapplication-TileColor" content="#FF3300"> -->
        <meta name="msapplication-tooltip" content="CO&#8322;-frei zur Schule - von-Bülow-Gymnasium Neudietendorf">
        <meta name="msapplication-TileImage" content="<?php echo $REL_PATH; ?>media/logo500x500.png" />

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary" />
        <!--<meta name="twitter:site" content="@flickr" />-->
        <meta name="twitter:title" content="CO&#8322;-frei zur Schule" />
        <meta name="twitter:description" content="Mach mit und reduziere deine CO&#8322;-Emmisionen!" />
        <meta name="twitter:image" content="<?php echo $REL_PATH; ?>media/logo500x500.png" />



    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $REL_PATH; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo $REL_PATH; ?>vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Chart -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <!-- Custom CSS -->
    <link href="<?php echo $REL_PATH; ?>dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $REL_PATH; ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-icon" href="<?php echo $PATH; ?>/m/main"><img class="navbar-icon" src="<?php echo $REL_PATH; ?>media/logo50x50.png" alt="CO&#8322;-frei zur Schule"></a>
                <a class="navbar-brand" href="<?php echo $PATH; ?>/m/main">CO&#8322;-frei zur Schule</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span></span>
                </li>
                <li>
                    <?php echo $USER_INFO['name']['first']." ".$USER_INFO['name']['last']; ?>
                </li>
                <li>
                    <a href="<?php echo $PATH; ?>/do/logout">
                        Abmelden
                    </a>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            Wettbewerb: <?php echo $USER_INFO['contest']['name']; ?><br>
                            Schule: <?php echo $USER_INFO['school']['name']; ?><br>
                            Klasse: <?php echo $USER_INFO['class']['name']; ?><br>
                            Punkte:
                        </li>
                        <li>
                            <a href="<?php echo $PATH; ?>/m/main"><i class="fa fa-home fa-fw"></i> Start</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Ich<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo $PATH; ?>/m/user?id=<?php echo $USER_INFO['ID']; ?>">Mein Profil</a>
                                </li>
                                <li>
                                    <a href="<?php echo $PATH; ?>/m/stats">Übersicht</a>
                                </li>
                                <li>
                                    <a href="<?php echo $PATH; ?>/m/settings">Einstellungen</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart fa-fw"></i> Ranglisten<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo $PATH; ?>/m/classes?id=<?php echo $USER_INFO['ID']; ?>">Meine Klasse</a>
                                </li>
                                <li>
                                    <a href="<?php echo $PATH; ?>/m/users">Beste Teilnehmer</a>
                                </li>
                                <li>
                                    <a href="<?php echo $PATH; ?>/m/classes">Beste Klasses</a>
                                </li>
                                <li>
                                    <a href="<?php echo $PATH; ?>/m/schools">Beste Schulen</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-info fa-fw"></i>Informationen<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo $PATH; ?>/m/report">Nutzer melden</a>
                                </li>
                                <li>
                                    <a href="<?php echo $PATH; ?>/m/badges">Abzeichen Übersicht</a>
                                </li>
                                <li>
                                    <a href="<?php echo $PATH; ?>/m/support">Support</a>
                                </li>
                                <li>
                                    <a href="<?php echo $PATH; ?>/m/broadcast">Nachrichten</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li class="sidebar-search">
                            <?php include("app/_incl_copy.php"); ?>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <?php include("app/menu_".$ACTION_MENU.".php"); ?>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->



    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo $REL_PATH; ?>vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $REL_PATH; ?>vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo $REL_PATH; ?>vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $REL_PATH; ?>dist/js/sb-admin-2.js"></script>

</body>

</html>
