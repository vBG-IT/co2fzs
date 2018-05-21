<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Starte einen Wettbewerb</h1>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        Wettbewerbseinstellungen
    </div>
    <div class="panel-body">
        <div class="row">
            <form role="form">
                <div class="form-group">
                    <div class="col-lg-12">
                    <label>Wie soll der Wettbewerb heißen?</label>
                        <input class="form-control" type="text" name="contest-name" placeholder="KryptonSchule-CO2-frei-2019">
                        <p class="help-block">Wähle einen einfachen Namen.</p>
                    </div>
                    <div class="col-lg-6">
                        <label>Wähle ein Startdatum aus!</label>
                        <input size="16" type="text" class="form-control" id="datetime2" readonly>
                        <script type="text/javascript">
                            $("#datetime2").datetimepicker({
                                format: 'yyyy-mm-dd hh:ii',
                                autoclose: true
                            });
                        </script>     
                    </div>
                    <div class="col-lg-6">
                        <label>Wähle ein Enddatum aus!</label>
                        <input size="16" type="text" class="form-control" id="datetime3" readonly>
                        <script type="text/javascript">
                            $("#datetime3").datetimepicker({
                                format: 'yyyy-mm-dd hh:ii',
                                autoclose: true
                            });
                        </script> 
                    </div>
                    <div class="col-lg-12">
                    <br>
                        <button type="submit" class="btn btn-lg btn-success btn-block">Wettbewerb erstellen</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

