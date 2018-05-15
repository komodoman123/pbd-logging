<head>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

  <style>
  body {
      position: relative;
  }
  .affix {
      top: 20px;
      z-index: 9999 !important;
  }
  div.col-sm-9 div {
      height: 250px;
      font-size: 28px;
  }
	.border{
	padding:10px;
	margin-top:10px;
	border: #cdcdcd medium solid;
	border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
}
.profile-sidebar {
padding: 20px 0 10px 0;
background: #fff;
}



.profile-usertitle {
text-align: center;
margin-top: 20px;
}

.profile-usertitle-nama {
color: #5a7391;
font-size: 16px;
font-weight: 600;
margin-bottom: 7px;
}

.profile-usertitle-id {
text-transform: uppercase;
color: #5b9bd1;
font-size: 12px;
font-weight: 600;
margin-bottom: 15px;
}




  </style>
	<?php
	include ('../layout/navbarpeg.php')

	?>
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="15">

<div class="container">
  <div class="row">
    <nav class="col-sm-3 border" id="myScrollspy" >
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="../img/profile.png" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-nama">
						<?php
						if (isset($_GET['nama'])) {
						    echo "<p class='text-center'>".$_GET['nama']."</p>";
						} else {
						    echo "nama";
						}
						?>

					</div>
					<div class="profile-usertitle-job">
						<?php
						if (isset($_GET['id'])) {
								echo "<p class='text-center'>".$_GET['id']."</p>";
						} else {
								echo "id";
						}
						?>

					</div>
				</div>
      <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="500">
        <li><a href="#assignment">Job Assignment</a></li>
        <li><a href="#gaji">Gaji</a></li>
        <li><a href="#waktu">Waktu</a></li>

      </ul>
    </nav>
    <div class="col-sm-9">
      <div id="assignment">
        <h3>Job Assignment</h3>
				<div id = "tabel1" >
				<table class="table table-hover table-bordered " id="dev-table1">
				<thead align = "center">
					<tr>
						<th>ID Proyek</th>
						<th>Nama Proyek</th>

					</tr>
				</thead>
				<tbody align = "center">
				<?php
					include ('../phpScript/jobassignment.php');
				?>
				</tbody>
		</table>

				</div>

      </div>
      <div id="gaji">
        <h3>Gaji</h3>
				<table class="table table-hover table-bordered " id="dev-table1">
				<thead align = "center">
					<tr>
						<th>ID Proyek</th>
						<th>Nama Proyek</th>

					</tr>
				</thead>
				<tbody align = "center">
					<?php
						include ('../phpScript/gajiperjam.php');
					?>
				</tbody>
		</table>

      </div>
      <div id="waktu">
        <h3>Presentase Kerja</h3>
				<table class="table table-hover table-bordered " id="dev-table1">
				<thead align = "center">
					<tr>
						<th>ID proyek</th>
						<th>Presentase</th>

					</tr>
				</thead>
				<tbody align = "center">
				<?php
					include ('../phpScript/presentaseKerja.php');
				?>
				</tbody>
		</table>


					  <div>
					    <canvas id="Chartwaktu" height="100" ></canvas>
					  </div>

      </div>
    </div>
  </div>
</div>

</body>

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
</html>
