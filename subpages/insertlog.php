<head>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker3.standalone.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.js"></script>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

<?php
	include ('../layout/navbarlog.php')
?>
</head>
<body>
<div class = "row">
    <div class="col-lg-4" allign = "center">
    </div>
    <div class="col-lg-4" allign = "center">
        <form action="../pages/logginmenu.php" method = "post">
        <fieldset id = "formi2">
        <legend>Proyek</legend>
            <div class = "form-group">
						<p> pilih proyek dari pegawai <?php echo "".$_POST['idPegawai'].""?> </p>
            <input type="hidden" class="form-control" id="idpeg"  value = <?php echo "".$_POST['idPegawai'].""?>  name="idPegawai" >
            </div>
            <div class="form-group">
                <label for="sel3">Pilih Proyek (idProyek):</label>
                <select class="form-control" id="sel3" name = "idProyek">
                    <?php
                            try

                            {
                            include ('../phpScript/connectdb.php');

                            }

                            catch(Exception $e)
                            {
                              die( print_r($e->getMessage()));
                            }
                            $id = $_POST['idPegawai'];
                            $query = "select idProyek from pekerjaan where idPegawai = ".$id."order by idProyek asc";
                            $getResults=$conn->prepare($query);
                            $getResults->execute();
                            $results=$getResults->fetchAll(PDO::FETCH_BOTH);

                            foreach ($results as $row) {
                              echo "<option>".$row['idProyek']."</option>";
                            }
                    ?>
                </select>
            </div>
            <div class="form-group">
						<div class='input-group date' id='datetimepicker1'>
            <label for="email">Waktu Awal:</label>
            <input type="text" class="form-control" id="tgl1" placeholder="Format (yyyy-mm-dd hh:mm:ss)" name="tanggal12">

            </div>
					</div>
            <div class="form-group">

            <label for="pwd">Waktu Akhir</label>
            <input type="text" class="form-control" id="tgl2" placeholder="Format (yyyy-mm-dd hh:mm:ss)" name="tanggal22">
            </div>

           <button type="submit" class="btn btn-default">Submit</button>
        </fieldset>
    </form>
    </div>

</body>
