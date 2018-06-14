
<?php
$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$length = 10;
$charactersLength = strlen($characters);
$randomString = '';
for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
}
$contestid = $randomString;
?>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
    <div class="container-fluid">
        <div class="row">
	        <div class="col-lg-12">
		        <h1 class="page-header">
                Wettbewerbseinstellungen
                </h1>
	        </div>
        </div>
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Wettbewerb starten
                </div>
                <div class="panel-body">
                        <form class="form-horizontal" method="post">
                            <div class="form-group ">
                                <div class="col-lg-12">
                                    <h4>Gebe dem Wettbewerb einen Namen</h4>
                                    <input type="text" class="form-control" aria-label="Name" autofocus placeholder="SuperDuperWettbewerbVomHerrnMöllerNichtGenehmigtWeilDopingErlaubtIstHaHaHa" aria-describedby="inputGroup-sizing-sm">
                                </div>
                                <div class="col-lg-12">
                                    <h4>WettbewerbsId</h4>
                                    <input type="text" disabled class="form-control" aria-label="Id" aria-describedby="inputGroup-sizing-sm" value="<?php echo $randomString; ?>">
                                </div>
                                <div class="col-lg-6">
                                    <h4>Wähle ein Startdatum aus.</h4>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar">
                                            </i>
                                        </div>
                                        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
                                    </div>
                                    <p class="help-block">Timestamp: </p>
                                </div>
                                <div class="col-lg-6">
                                    <h4>Wähle ein Enddatum aus.</h4>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar">
                                            </i>
                                        </div>
                                        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
                                    </div>
                                    <p class="help-block">Timestamp: </p>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="StartContest" class="btn btn-success btn-lg btn-block">Starte den Wettbewerb</button> 
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

?>


