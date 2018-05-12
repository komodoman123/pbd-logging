<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<?php
	include ('../layout/navbarpro.php')
?>
</head>
<body>
<div class="container">
    
    	<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Proyek</h3>
						<div class="pull-right">
							<span class="searcg" data-toggle="tooltip" title="cari pegawai" data-container="body">
								<i class="fa fa-search"></i>
							</span>
						</div>
					</div>
					<!--<div class="panel-body">
						<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
					</div>-->
					<table class="table table-hover" id="dev-table">
						<thead>
							<tr>
								<th>idProyek</th>
								<th>Nama Proyek</th>
								
							</tr>
						</thead>
						<tbody>
						<?php
							include ('../phpScript/tabel-proyek.php');
						?>
						</tbody>
					</table>
				</div>
			</div>
			
		</div>
	</div>
	</body>