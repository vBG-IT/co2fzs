<form action="<?php echo $PATH; ?>/sec/do-register-staff" method="POST">
  <input type="text" name="name_first" placeholder="Vorname" /><br />
  <input type="text" name="name_last" placeholder="Nachname" /><br />
  <input type="email" name="email" placeholder="E-Mail Adresse" /><br />
  <input type="text" name="username" placeholder="Benutzername" /><br />
  <input type="password" name="password" placeholder="Passwort" /><br />
  <button type="submit">Anmelden</button><br />
</form>
<a href="<?php echo $PATH; ?>/sec/register">Als Benutzer registrieren</a><br />
<a href="<?php echo $PATH; ?>/sec/login">Anmelden</a><br />
