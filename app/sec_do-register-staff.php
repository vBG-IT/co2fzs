<?php

$name_first = $_POST['name_first'];
$name_last = $_POST['name_last'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);



$statement = $PDO->prepare("SELECT ID FROM user WHERE email = ?");
$statement->execute([$email]);
$result = $statement->fetchAll();
if(count($result) == 0) {
  $statement = $PDO->prepare("SELECT ID FROM user WHERE username = ?");
  $statement->execute([$username]);
  $result = $statement->fetchAll();
  if(count($result) == 0) {
    $statement = $PDO->prepare("INSERT INTO user (name_first, name_last, username, password, email) VALUES (?, ?, ?, ?, ?)");
    $statement->execute([$name_first, $name_last, $username, $password, $email]);
    header("Location: ?sec=login");
    exit();
  }
  else {
    header("Location: ?sec=register-staff&error=username-used");
    exit();
  }
}
else {
  header("Location: ?sec=register-staff&error=email-used");
  exit();
}

?>
