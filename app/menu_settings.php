<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Einstellungen</h1>
	</div>
</div>
<!-- /.row -->

<form role="form" action="exe-p-einstellungen.php" method="post">
	<fieldset>
		<div class="form-group">
			<label>Wie weit ist dein Schulweg? Auf einen Kilometer genau.</label>
			<input class="form-control" placeholder="Entfernung (km)" name="distanz" type="number" min="1" max="30" step="1" value="<?php echo $DISTANCE; ?>" autofocus>
		</div>
		<!-- Change this to a button or input when using this as a form -->
		<button type="submit" class="btn btn-lg btn-success btn-block">Speichern</button>
	</fieldset>
</form>