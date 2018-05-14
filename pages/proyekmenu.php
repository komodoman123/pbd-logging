<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<?php
	include ('../layout/navbarpro.php')
?>
</head>
<body>
<div class = "row">
    <div class="col-lg-6" allign = "center">
        <button class = "btn btn-info btn-block" data-toggle="collapse" data-target="#tabel1">Proyek Aktif <i class ="fa fa-angle-down" ></i></button>
            <div id = "tabel1" class = "collapse">
            <table class="table table-hover" id="dev-table">
						<thead>
							<tr>
								<th>id Proyek</th>
								<th>Nama Proyek</th>
                                <th>Gaji Perjam</th>
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
    <div class="col-lg-6" allign = "center">
        <button class = "btn btn-info btn-block" data-toggle="collapse" data-target="#tabel2">Assignment Pegawai <i class ="fa fa-angle-down" ></i></button>
        <form action="/action_page.php">
        <fieldset id = "tabel2" class = "collapse">
        <legend>Project Assignment</legend>
            <div class="form-group">
            <label for="sel1">Pilih Proyek (idProyek):</label>
                <select class="form-control" id="sel1" name = "idProyek">
                    <?php 
                        include ('../phpScript/listProyek.php')
                    ?>
                </select>
            </div>
            
            <button class="btn btn-default" onclick = function() >Submit</button>
        </fieldset>
    </form>
    </div>
</div>
</body>