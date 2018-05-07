<form action="?sec=do-register-staff" method="POST">
  <input type="hidden" name="school" value="<?php echo $_GET['school']; ?>" />
  <input type="hidden" name="class" value="<?php echo $_GET['class']; ?>" />
  <input type="text" placeholder="Schule" disabled /> <a href="?sec=register">Ändern</a><br />
  <input type="text" placeholder="Klasse" disabled /> <a href="?sec=register">Ändern</a><br />
  <input type="text" name="name_first" placeholder="Vorname" /><br />
  <input type="text" name="name_last" placeholder="Nachname" /><br />
  <input type="text" name="username" placeholder="Benutzername" /><br />
  <input type="password" name="password" placeholder="Passwort" /><br />
  <button type="submit">Anmelden</button><br />
</form>
<a href="?sec=register-staff">Als Mitarbeiter registrieren</a><br />
<a href="?sec=login">Anmelden</a><br />
