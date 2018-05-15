<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<?php
	include ('../layout/navbarpeg.php')
?>
<script>
	$(document).ready(function() {
		//$('.table-paginate').dataTable();
	});
</script>
</head>
<body>
<div class = "row">
    <div class="col-lg-6" allign = "center">
        <button class = "btn btn-info btn-block" data-toggle="collapse" data-target="#tabel1">Pegawai <i class ="fa fa-angle-down" ></i></button>
            <div id = "tabel1" class = "collapse">
            <table class="table table-hover table-bordered table-paginate" id="dev-table1">
						<thead align = "center">
							<tr>
								<th>id Pegawai</th>
								<th>Nama Pegawai</th>

							</tr>
						</thead>
						<tbody align = "center">
						<?php
							include ('../phpScript/tabel-pegawai.php');
						?>
						</tbody>
				</table>

            </div>
    </div>
    <div class="col-lg-6" allign = "center">
        <button class = "btn btn-info btn-block" data-toggle="collapse" data-target="#tabel2">Assignment Pegawai <i class ="fa fa-angle-down" ></i></button>
            <div id = "tabel2" class = "collapse">
            <table class="table table-hover" id="dev-table">
						<thead>
							<tr>
								<th>id Proyek</th>
								<th>Nama Proyek</th>
                                <th>id Pegawai</th>
                                <th>Nama Pegawai</th>

							</tr>
						</thead>
						<tbody>
						<?php
							include ('../phpScript/tabel-pekerjaan.php');
						?>
						</tbody>
				</table>
            </div>
    </div>
</div>
</body>
