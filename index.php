<?php

if(empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'off') {
  header("Location: error/https.html");
  exit();
}

try {
	$PDO = new PDO('sqlite:data/db.db');
	$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "DB connection failed: " . $e->getMessage();
}

require('app/lib_random-token.php');
require('app/lib_valid-path.php');

// Session beginnen
session_start();

// Benutzersession laden
$USER = $_SESSION['user'];
//$USER = NULL;

// Aktivität laden
$ACTION_PAGE = $_GET['p'];
$ACTION_DO = $_GET['do'];
$ACTION_SEC = $_GET['sec'];

// Ist der Benutzer angemeldet?
if(!empty($USER)) {

	$statement = $PDO->prepare("SELECT * FROM user WHERE ID = ?");
	$statement->execute([$USER]);
	$result = $statement->fetch();

	$USER_INFO = [
		'id' => $result['ID'],
		'name' => $result['name'],
    'role' => [],
	];

	if($USER_INFO['name'] == '') {
		$USER_INFO['name'] = 'user:'.$USER_INFO['id'];
	}

	if(!empty($ACTION_PAGE)) {
		include("web/app/page.php");
	}
	elseif(!empty($ACTION_DO)) {
		include("web/app/do.php");
	}
	else {
		header("Location: ?p=main");
		exit();
	}
}
else {
	if(!empty($ACTION_SEC)) {
		include("web/app/sec.php");
	}
	else {
		header("Location: ?sec=login");
		exit();
	}
}

echo 'Hallo Welt';
