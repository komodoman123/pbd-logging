<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<?php
	include ('../layout/navbarlog.php');    
?>
</head>
<body>
<div class="row">
  <div class="col-lg-4" allign = "center">
    <div class = "col-lg-12" margin-top = "5%" >
    <button class = "btn btn-info btn-block" data-toggle="collapse" data-target="#tabel1">Logg Pegawai <i class ="fa fa-angle-down" ></i></button>
    <div id = "tabel1" class = "collapse">
            <table class="table table-hover table-bordered table-paginate" id="dev-table1">
						<thead align = "center">
							<tr>
                                <th>no</th>
								<th>id Pegawai</th>
								<th>id Proyek</th>
                                <th>waktu in</th>
                                <th>waktu out</th>
							</tr>
						</thead>
						<tbody align = "center">
						<?php
							include ('../phpScript/tabel-log.php');
						?>
						</tbody>
				</table>
            </div>
    </div>
  </div>
  <div class="col-lg-4" allign = "center">
  <div class = "col-lg-12" margin-top = "5%" >
    <button class = "btn btn-info btn-block" data-toggle="collapse" data-target="#formi1">Insert Logg <i class ="fa fa-angle-down" ></i></button>
    <form action="../subpages/insertlog.php" method = "post">
        <fieldset id = "formi1" class = "collapse">
        <legend>Proyek</legend>
            <div class="form-group">
                <label for="sel2">Pilih Pegawai (idPegawai):</label>
                <select class="form-control" id="sel2" name = "idPegawai">
                    <?php 
                        include ('../phpScript/listPegawai.php')
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-default" >Next <i class = "fa fa-angle-right"></i></button>
        </fieldset>
    </form>
    </div>
  </div>
  <div class="col-lg-4" allign = "center">
  <div class = "col-lg-12" margin-top = "5%" >
    <button class = "btn btn-info btn-block" data-toggle="collapse" data-target="#formi3">Agregat logg <i class ="fa fa-angle-down" ></i></button>
    <form action="../subpages/agregatlog.php">
        <fieldset id = "formi3" class = "collapse">
        <legend>Proyek</legend>
            <div class="form-group">
            <label for="email">Tanggal:</label>
            <input type="text" class="form-control" id="email1" placeholder="Format (yyyy-mm-dd)" name="tanggalagg">
            </div>
            <button type="submit" class="btn btn-default">Agregat</button>
        </fieldset>
    </form>
    </div>
  </div>
</div>
</body>