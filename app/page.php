<?php
include("./db-conn.php");
?>
<?php
$id = 1;
$_SESSION["ID"] = $id;

$PDO = $db->prepare("SELECT * FROM users WHERE id = :id");
$PDO->bindParam(':id', $id); //TODO: $_SESSION["user"] als Parameter einfügen
$PDO->execute();
if($PDO->rowCount() == 1){
    $usr_obj = $usr->fetchObject();
    $VORNAME = $usr_obj->vorname;
    $NACHNAME = $usr_obj->nachname;
}

$seite = $_GET["p"];

if(!isset($seite)) {
	header("Location: index.php?p=main");
	exit();
}

$page = "page_".$seite.".php";
?>

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
        <link rel="icon" href="./media/logo50x50.png" />

        <!-- Apple -->
        <link rel="apple-touch-icon" href="./media/logo500x500.png" />
        <link rel="apple-touch-icon-precomposed" href="./media/logo500x500.png" />
        <link rel="apple-touch-startup-image" href="./media/hintergrund.png">
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
        <meta name="msapplication-TileImage" content="./media/logo500x500.png" />

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary" />
        <!--<meta name="twitter:site" content="@flickr" />-->
        <meta name="twitter:title" content="CO&#8322;-frei zur Schule" />
        <meta name="twitter:description" content="Mach mit und reduziere deine CO&#8322;-Emmisionen!" />
        <meta name="twitter:image" content="./media/logo500x500.png" />



    <!-- Bootstrap Core CSS -->
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="./vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Chart -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>  

    <!-- Custom CSS -->
    <link href="./dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                <a class="navbar-icon" href="index.php?p=main"><img class="navbar-icon" src="./media/logo50x50.png" alt="CO&#8322;-frei zur Schule"></a>
                <a class="navbar-brand" href="index.php?p=main">CO&#8322;-frei zur Schule</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span></span>
                </li>
                <li>
                    <?php echo $VORNAME." ".$NACHNAME; ?>
                </li>
                <li>
                    <a href="sec-logout.php?info=logout">
                        Abmelden
                    </a>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            Team: <?php echo $TEAM; ?><br>
                            Streckendistanz: <?php echo $DISTANZ; ?>km<br>
                            Punkte: <?php echo $PUNKTE; ?>
                        </li>
                        <li>
                            <a href="index.php?p=main"><i class="fa fa-home fa-fw"></i> Start</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Ich<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php?p=teilnehmer&id=<?php echo $_SESSION["ID"]; ?>">Mein Profil</a>
                                </li>
                                <li>
                                    <a href="index.php?p=uebersicht">Übersicht</a>
                                </li>
                                <li>
                                    <a href="index.php?p=einstellungen">Einstellungen</a>
                                </li>
                                <li>
                                    <a href="intro.php">Regeln</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart fa-fw"></i> Ranglisten<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php?p=team&id=<?php echo $TEAM; ?>">Mein Team</a>
                                </li>
                                <li>
                                    <a href="index.php?p=schule-teilnehmer">Beste Teilnehmer</a>
                                </li>
                                <li>
                                    <a href="index.php?p=schule-team">Beste Teams</a>
                                </li>
                                <li>
                                    <a href="index.php?p=beste-schulen">Beste Schule</a>
                                </li>
                                <li>
                                    <a href="pdf-rangliste.php">Aktuelle Ranglistenübersicht (PDF)</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-info fa-fw"></i>Informationen<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php?p=nutzer-melden">Nutzer melden</a>
                                </li>
                                <li>
                                    <a href="index.php?p=ueberischt-abzeichen">Abzeichen Übersicht</a>
                                </li>
                                <li>
                                    <a href="index.php?p=info-support">Support</a>
                                </li>
                                <li>
                                    <a href="index.php?p=info-broadcast">Broadcast</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li class="sidebar-search">
                            Wettbewerbsverwaltung von <a href="http://milchinsel.de" target="_blank">&copy; milchinsel.de Clemens Riese und <a href="http://kekdestages.de" target="_blank">&copy; kekdestages.de Jonas Barfknecht 2017</a>
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
                <?php include(validPath($ACTION_PAGE)); ?>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->



    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="./vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="./vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="./dist/js/sb-admin-2.js"></script>

</body>

</html>
