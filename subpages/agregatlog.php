<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<?php
	include ('../layout/navbarlog.php')
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
								<th>idPegawai</th>
								<th>idProyek</th>
                                <th>tanggal</th>
                                <th>durasi Jam Kerja</th>
								
							</tr>
						</thead>
						<tbody>
						<?php 
                            try

                            {
                            include ('../phpScript/connectdb.php');
                            
                            }
                            
                            catch(Exception $e)
                            {
                              die( print_r($e->getMessage()));
                            }
                            $tanggal = "";
                            if(isset($_POST['tanggalagg'])){
                                $tanggal = $_POST['tanggalagg'];
                            }

                            $query = "exec insertIntoAgregat "."'".$tanggal."'";
                            $getResults=$conn->prepare($query);
                            $getResults->execute();
                            $results=$getResults->fetchAll(PDO::FETCH_BOTH);
                            
                            foreach ($results as $row) {
                                echo "<tr>";
                                echo "<td>".$row['idPegawai']."</td>";
                                echo "<td>".$row['idProyek']."</td>";
                                echo "<td>".$row['tanggal']."</td>";
                                echo "<td>".$row['durasiKerja']."</td>"; 
                                echo "</tr>";
                            }
                        ?>
						</tbody>
					</table>
				</div>
			</div>
			
		</div>
	</div>
	</body>