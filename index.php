<?php

if(empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'off') {
  header("Location: error/https.html");
  exit();
}

try {
	$PDO = new PDO('sqlite:' . __DIR__ . DIRECTORY_SEPARATOR . 'data/db.sqlite');
	$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Datenbankverbindung fehlgeschlagen: " . $e->getMessage();
}

require('app/lib_random-token.php');
require('app/lib_valid-path.php');
require('app/lib_calculate-points.php');

// Session beginnen
session_start();

// Benutzersession laden
$USER = $_SESSION['user'];
//$USER = 1;

// Script Pfad relativ zu Document Root
$PATH = $_SERVER['SCRIPT_NAME'];

// Pfad nach Script Pfad
$path_info = explode('/', substr($_SERVER['PATH_INFO'], 1));

// Relativer Pfad zur Script Ebene (Ebenen die zurück gegangen werden müssen)
$REL_PATH = "";
if($path_info != [] && $path_info[0] != "") {
  foreach ($path_info as $v) {
    $REL_PATH .= "../";
  }
}

if(count($path_info) == 2 && $path_info[1] != "") {
  if(validPath($path_info[1]) == $path_info[1]) {
    if($path_info[0] == "p") {
      if(!file_exists("app/page_".$path_info[1].".php")) {
        http_response_code(404);
        include("app/error_404.php");
        exit();
      }
    }
    elseif($path_info[0] == "m") {
      if(!file_exists("app/menu_".$path_info[1].".php")) {
        http_response_code(404);
        include("app/error_404.php");
        exit();
      }
    }
    elseif($path_info[0] == "do") {
      if(!file_exists("app/do_".$path_info[1].".php")) {
        http_response_code(404);
        include("app/error_404.php");
        exit();
      }
    }
    elseif($path_info[0] == "sec") {
      if(!file_exists("app/sec_".$path_info[1].".php")) {
        http_response_code(404);
        include("app/error_404.php");
        exit();
      }
    }
    else {
      http_response_code(404);
      include("app/error_404.php");
      exit();
    }
  }
  else {
    http_response_code(404);
    include("app/error_404.php");
    exit();
  }

  // Ist der Benutzer angemeldet?
  if(!empty($USER)) {
    // Benutzer
  	$statement = $PDO->prepare("SELECT * FROM user WHERE ID = ?");
  	$statement->execute([$USER]);
  	$result_user = $statement->fetch();

    // Administrationsrollen des Benutzers
    $statement = $PDO->prepare("SELECT * FROM admin WHERE ID = ?");
    $statement->execute([$USER]);
    $result_admin = $statement->fetchAll();
    $admin = [];
    foreach ($result_admin as $value) {
      $admin[] = $value['role'];
    }

    // Kapitäinsämter des Benutzers
    $statement = $PDO->prepare("SELECT * FROM class_admin WHERE ID = ?");
    $statement->execute([$USER]);
    $result_class = $statement->fetchAll();
    $class = [];
    foreach ($result_class as $value) {
      $class[] = $value['class'];
    }

    // Wettbewerbsleiterämter des Benutzers
    $statement = $PDO->prepare("SELECT * FROM contest_admin WHERE ID = ?");
    $statement->execute([$USER]);
    $result_contest = $statement->fetchAll();
    $class = [];
    foreach ($result_contest as $value) {
      $contest[] = $value['contest'];
    }

    // Schulwettbewerbsleitungsämter des Benutzers
    $statement = $PDO->prepare("SELECT * FROM school_admin WHERE ID = ?");
    $statement->execute([$USER]);
    $result_school = $statement->fetchAll();
    $class = [];
    foreach ($result_school as $value) {
      $school[] = $value['school'];
    }

    // Klasseninfos des Benutzers
    $statement = $PDO->prepare("SELECT * FROM class WHERE ID = ?");
    $statement->execute([$result_user['class']]);
    $result_class_user = $statement->fetch();

    // Schulinfos des Benutzers
    $statement = $PDO->prepare("SELECT * FROM school WHERE ID = ?");
    $statement->execute([$result_class_user['school']]);
    $result_school_user = $statement->fetch();

    // Wettbewerbsinfos des Benutzers
    $statement = $PDO->prepare("SELECT * FROM contest WHERE ID = ?");
    $statement->execute([$result_school_user['contest']]);
    $result_contest_user = $statement->fetch();

    // Alle Informationen zusammenstellen
  	$USER_INFO = [
  		'ID' => $result_user['ID'],
  		'name_first' => $result_user['name_first'],
      'name_last' => $result_user['name_last'],
      'class' => [
        'ID' => $result_class_user['ID'],
        'name' => $result_class_user['name'],
      ],
      'school' => [
        'ID' => $result_school_user['ID'],
        'name' => $result_school_user['name'],
        'location' => $result_school_user['location'],
      ],
      'contest' => [
        'ID' => $result_contest_user['ID'],
        'name' => $result_contest_user['name'],
        'period' => [
          'first' => $result_contest_user['day_first'],
          'last' => $result_contest_user['day_last'],
        ]
      ],
      'as' => $result_user['as'],
      'default_distance' => $result_user['default_distance'],
      'username' => $result_user['username'],
      'admin' => [
        'role' => $admin,
        'class' => $class,
        'contest' => $contest,
        'school' => $school,
      ]
  	];

    if($path_info[0] == 'm') {
      $ACTION_MENU = $path_info[1];
    	include("app/menu.php");
  	}
  	elseif($path_info[0] == 'p') {
      $ACTION_PAGE = $path_info[1];
  		include("app/page.php");
  	}
  	elseif($path_info[0] == 'do') {
      $ACTION_DO = $path_info[1];
  		include("app/do.php");
  	}
  	else {
      header("Location: ".$PATH."/m/main");
      exit();
  	}
  }
  else {
    if($path_info[0] == 'sec') {
      $ACTION_SEC = $path_info[1];
  		include("app/sec.php");
  	}
  	elseif($path_info[0] == 'p') {
      $ACTION_PAGE = $path_info[1];
  		include("app/page.php");
  	}
  	else {
      header("Location: ".$PATH."/p/main");
      exit();
  	}
  }
}
else {
  if($_SERVER['PATH_INFO'] == "" || $_SERVER['PATH_INFO'] == "/") {
    if(!empty($USER)) {
      header("Location: ".$PATH."/m/main");
      exit();
    }
    else {
      header("Location: ".$PATH."/p/main");
      exit();
    }
  }
  else {
    http_response_code(404);
    include("app/error_404.php");
    exit();
  }
}
