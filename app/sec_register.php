<?php

/* if(!empty($_GET['class'])) {
?>
<form action="?sec=do-register-staff" method="POST">
  <input type="hidden" name="class" value="<?php echo $_GET['class']; ?>" />
  <input type="text" placeholder="Klasse" value="<?php echo $_GET['class']; ?>" disabled /> <a href="?sec=register">Ändern</a><br />
  <input type="text" name="name_first" placeholder="Vorname" /><br />
  <input type="text" name="name_last" placeholder="Nachname" /><br />
  <input type="text" name="username" placeholder="Benutzername" /><br />
  <input type="password" name="password" placeholder="Passwort" /><br />
  <button type="submit">Anmelden</button><br />
</form>
<?
}
elseif (!empty($_GET['school'])) {
  $statement = $PDO->prepare("SELECT * FROM class WHERE school = ? ORDER BY name");
  $statement->execute([$_GET['school']]);
  foreach ($statement->fetchAll() as $row) {
    echo '<a href="'.$row['ID'].'">'.$row['name'].'</a><br />';
  }
}
elseif (!empty($_GET['contest'])) {
  $statement = $PDO->prepare("SELECT * FROM school WHERE contest = ? ORDER BY name");
  $statement->execute([$_GET['contest']]);
  foreach ($statement->fetchAll() as $row) {
    echo '<a href="'.$row['ID'].'">'.$row['name'].'</a><br />';
  }
}
else {
  echo 'Wähle den Wettbewerb:';
  $statement = $PDO->prepare("SELECT * FROM contest ORDER BY name");
  $statement->execute();
  foreach ($statement->fetchAll() as $row) {
    echo '<a href="?sec=register&contest='.$row['ID'].'">'.$row['name'].'</a><br />';
  }
}*/
?>
<a href="<?php echo $PATH; ?>/sec/register-staff">Als Mitarbeiter registrieren</a><br />
<a href="<?php echo $PATH; ?>/sec/login">Anmelden</a><br />
