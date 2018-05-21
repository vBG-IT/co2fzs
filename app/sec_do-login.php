<?php

$username = $_POST['username'];
$password = $_POST['password'];

$statement = $PDO->prepare("SELECT * FROM user WHERE username = ?");
$statement->execute([$username]);
$result = $statement->fetchAll();
if(count($result) == 1) {
  $result = $result[0];
  if(password_verify($password, $result['password'])) {
    $_SESSION['user'] = $result['ID'];
    header("Location: ?m=main");
    exit();
  }
  else {
    header("Location: ?sec=login&error=invalid-password");
    exit();
  }
}
else {
  header("Location: ?sec=login&error=username-not-found");
  exit();
}

?>
