<?php
$user_statement = $PDO->prepare("SELECT * FROM user WHERE ID = :id");
$user_statement->bindParam(':id', $USER); //USER ID
$user_statement->execute();

$user_o = $user_statement->fetchObject();
$FIRSTNAME = $user_o->name_first;
$LASTNAME = $user_o->name_last;
$TEAM = $user_o->class;
$DISTANCE = $user_o->default_distance;
$USERNAME = $user_o->username;

$track_statement = $PDO->prepare("SELECT * FROM track WHERE user = :user");
$track_statement->bindParam('user', $USERNAME);
$track_statement->execute();

$POINTS = 0;
$DISTANCE_CYCLE = 0;
$DISTANCE_FOOT = 0;
$DISTANCE_PUBLIC = 0;
foreach ($track_statement as $row) { 
	 $POINTS += calculatePoints($row["distance"], $row["transport"]);

	 if($row["transport"] == 'foot'){
		$DISTANCE_FOOT += $row["distance"];
	}elseif ($row["transport"] == 'cycle') {
		$DISTANCE_CYCLE += $row["distance"];
	}
	elseif ($row["transport"] == 'public') {
		$DISTANCE_PUBLIC += $row["distance"];
	}
}

?>

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
            <?php echo $FIRSTNAME." ".$LASTNAME?>
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
				{label: "Gar nicht/Anderes Verkehrsmittel", value: <?php echo $DISTANCE_CYCLE?>},
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
							<tr><th>Team</th><td><a href="index.php?p=team&id=<?php echo $TEAM; ?>"><?php echo $TEAM; ?></a></td></tr>
							<tr><th>Schule</th><td><a href="index.php?p=schule&id=<?php echo $SCHOOL; ?>"><?php echo $SCHOOL; ?></a></td></tr>
							<tr><th>Punkte</th><td><?php echo $POINTS ?></td></tr>
							<tr><th>Schulweglänge</th><td><?php echo $DISTANCE; ?>km</td></tr>
							<tr><th>Distanz zu Fuß</th><td><?php echo $DISTANCE_FOOT; ?>km</td></tr>
							<tr><th>Distanz mit dem Rad</th><td><?php echo $DISTANCE_CYCLE; ?>km</td></tr>
							<tr><th>Distanz per ÖPNV</th><td><?php echo $DISTANCE_PUBLIC; ?>km</td></tr>
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
foreach(){ //NOCH KEINE TAGE DEFINIERT

}

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

