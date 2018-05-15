<html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<?php
	include ('../layout/navbarlap.php')
?>
</head>
<body>
<div class="container">

    	<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Pegawai dengan ID <?php echo $_GET['idPegawai']  ?></h3>
						<div class="pull-right">

						</div>
					</div>
					<!--<div class="panel-body">
						<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
					</div>-->
					<table class="table table-hover" id="dev-table">
						<thead>
							<tr>
								<th>ID Proyek</th>
								<th>Presentase</th>

							</tr>
						</thead>
						<tbody>
						<?php
							include ('../phpScript/presentaseKerja.php');
						?>
						</tbody>
					</table>


				</div>
				<div>
					<canvas id="Chartwaktu" height="100" ></canvas>
				</div>
			</div>

		</div>
	</div>
	<script>

	var ctx = document.getElementById("Chartwaktu").getContext('2d');
	var proyek=<?php echo json_encode($proyek ); ?>;
	var persen= <?php echo json_encode($persen ); ?>;
	var color = <?php echo json_encode($colorfix ); ?>;
	var myChart = new Chart(ctx, {
	  type: 'pie',
	  data: {
	    labels: proyek,
	    datasets: [{
	      backgroundColor: color,
	      data:persen
	    }]
	  }
	});
	</script>
	</body>
</html>
