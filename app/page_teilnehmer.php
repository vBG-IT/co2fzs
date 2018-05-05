<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
            <?php echo $VORNAME." ".$NACHNAME?>
        </h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				Genutze Verkehrsmittel in Wegen
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<div id="kategorien" style="width: 100%;"></div>
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
		<script type="text/javascript">
		Morris.Donut({
			element: 'kategorien',
			colors: [
				"#e6e6e6",
				"#5cb85c",
				"#f0ad4e",
				"#d9534f"
			],
			data: [
				{label: "Gar nicht/Anderes Verkehrsmittel", value: <?php?>},
				{label: "Zu Fuß", value: <?php?>},
				{label: "Mit dem Rad", value: <?php?>},
				{label: "Per ÖPNV", value: <?php?>}
			]
		});
		</script>
	</div>
	<div class="col-lg-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				Statistiken
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
						<tbody>
							<tr><th>Team</th><td><a href="index.php?p=team&id=<?php echo $member_team; ?>"><?php echo $member_team; ?></a></td></tr>
							<tr><th>Punkte</th><td><?php echo ($member_punkte_3 * round(pow($distanz, 1))) + ($member_punkte_2 * round(pow($distanz, 1.8))) + ($member_punkte_1 * round(pow($distanz, 2))); ?></td></tr>
							<tr><th>Schulweglänge</th><td><?php echo $distanz; ?>km</td></tr>
							<tr><th>Distanz zu Fuß</th><td><?php echo $member_punkte_1 * $distanz; ?>km</td></tr>
							<tr><th>Distanz mit dem Rad</th><td><?php echo $member_punkte_2 * $distanz; ?>km</td></tr>
							<tr><th>Distanz per ÖPNV</th><td><?php echo $member_punkte_3 * $distanz; ?>km</td></tr>
						</tbody>
					</table>
				</div>
				<!-- /.table-responsive -->
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
</div>

