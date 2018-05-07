<?php

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$statement = $PDO->prepare("SELECT * FROM user WHERE username = ?");
$statement->execute([$username]);
if($statement->rowCount() == 1) {
  $result = $statement->fetch();
  if($password == $result['password']) {
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
