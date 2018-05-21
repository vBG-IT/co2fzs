<?php
//User Variables
$firstname = $result_user["name_first"];
$lastname = $result_user["name_last"];
$username = $result_user["username"];
$distance = $result_user["default_distance"];

$track_statement = $PDO->prepare("SELECT * FROM track WHERE user = :user");
$track_statement->bindParam('user', $username);
$track_statement->execute();

$points = 0;
$distance_cycle = 0;
$distance_foot = 0;
$distance_public = 0;
foreach ($track_statement as $row) {
	 $points += calculatePoints($row["distance"], $row["transport"]);

	 if($row["transport"] == 'foot'){
		$distance_foot += $row["distance"];
	}elseif ($row["transport"] == 'cycle') {
		$distance_cycle += $row["distance"];
	}
	elseif ($row["transport"] == 'public') {
		$distance_public += $row["distance"];
	}
}

?>

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
            <?php echo $firstname." ".$lastname?>
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
				{label: "Gar nicht/Anderes Verkehrsmittel", value: <?php echo $distance_cycle?>},
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
							<tr><th>Team</th><td><a href="index.php?p=team&id=<?php echo $USER_INFO["class"]["name"]; ?>"><?php echo $USER_INFO["class"]["name"]; ?></a></td></tr>
							<tr><th>Schule</th><td><a href="index.php?p=schule&id=<?php echo $USER_INFO["school"]["name"]; ?>"><?php echo $USER_INFO["school"]["name"]; ?></a></td></tr>
							<tr><th>Punkte</th><td><?php echo $points ?></td></tr>
							<tr><th>Schulweglänge</th><td><?php echo $distance; ?>km</td></tr>
							<tr><th>Distanz zu Fuß</th><td><?php echo $distance_foot; ?>km</td></tr>
							<tr><th>Distanz mit dem Rad</th><td><?php echo $distance_cycle; ?>km</td></tr>
							<tr><th>Distanz per ÖPNV</th><td><?php echo $distance_public; ?>km</td></tr>
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
<div class="row">
    <div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Verlauf
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<div class="table-responsive">
				    <table class="table table-striped table-bordered table-hover">
					   <thead>
                			<tr>
                				<th>Tag</th>
                				<th>Datum</th>
                				<th>Hinweg</th>
                				<th>Rückweg</th>
                			</tr>
                		</thead>
						<tbody>
<?php

?>
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
