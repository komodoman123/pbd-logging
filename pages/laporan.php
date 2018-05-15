<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<?php
	include ('../layout/navbarlap.php')
?>
</head>
<body>
<div class="row">
  <div class="col-lg-4" allign = "center">
    <div class = "col-lg-12" margin-top = "5%" >
    <button class = "btn btn-info btn-block" data-toggle="collapse" data-target="#tabel1">Total Waktu yang digunakan Proyek <i class ="fa fa-angle-down" ></i></button>
    <div id = "tabel1" class = "collapse">
            <table class="table table-hover" id="dev-table">
						<thead>
							<tr>
								<th>id Proyek</th>
								<th>Nama Proyek</th>
                                <th>Total Waktu Kerja Proyek</th>
							</tr>
						</thead>
						<tbody>
						<?php
							include ('../phpScript/tabel-totalwaktu.php');
						?>
						</tbody>
				</table>
            </div>
    </div>
  </div>
  <div class="col-lg-4" allign = "center">
  <div class = "col-lg-12" margin-top = "5%" >
    <button class = "btn btn-info btn-block" data-toggle="collapse" data-target="#formi1">Gaji Pegawai Pada Waktu tertentu<i class ="fa fa-angle-down" ></i></button>
    <form action="../subpages/gaji.php" method = "post">
        <fieldset id = "formi1" class = "collapse">
        <legend>Gaji Pegawai</legend>
            <div class="form-group">
                <label for="sel2">Pilih Pegawai (idPegawai):</label>
                <select class="form-control" id="sel2" name = "idPegawai">
                    <?php 
                        include ('../phpScript/listPegawai.php')
                    ?>
                </select>
            </div>
            <div class="form-group">
            <label for="email">Tanggal Awal:</label>
            <input type="text" class="form-control" id="email1" placeholder="Format (yyyy-mm-dd)" name="tanggal1">
            </div>
            <div class="form-group">
            <label for="pwd">tanggal Akhir:</label>
            <input type="text" class="form-control" id="pwd1" placeholder="Format (yyyy-mm-dd)" name="tanggal2">
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </fieldset>
    </form>
    </div>
  </div>
  <div class="col-lg-4" allign = "center">
  <div class = "col-lg-12" margin-top = "5%" >
    <button class = "btn btn-info btn-block" data-toggle="collapse" data-target="#formi2">Presentase Waktu Pegawai <i class ="fa fa-angle-down" ></i></button>
    <form action="/action_page.php">
        <fieldset id = "formi2" class = "collapse">
        <legend>Presentase Waktu Kerja Pada Waktu Tertentu</legend>
            <div class="form-group">
                <label for="sel3">Pilih Pegawai (idPegawai):</label>
                <select class="form-control" id="sel3" name = "idPegawai">
                    <?php 
                        include ('../phpScript/listPegawai.php')
                    ?>
                </select>
            </div>
            <div class="form-group">
            <label for="email">Tanggal Awal:</label>
            <input type="text" class="form-control" id="email2" placeholder="Format (yyyy-mm-dd)" name="tanggal12">
            </div>
            <div class="form-group">
            <label for="pwd">Tanggal Akhir</label>
            <input type="text" class="form-control" id="pwd2" placeholder="Format (yyyy-mm-dd)" name="tanggal22">
            </div>
            
           <button type="submit" class="btn btn-default">Submit</button>
        </fieldset>
    </form>
    </div>
  </div>
</div>
</body>