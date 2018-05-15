<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
            <input type="text" class="form-control" id="pwd" placeholder="Format (yyyy-mm-dd)" name="idpeg" value = <?php echo "".$_POST['idPegawai1'].""?> disabled>    
            </div>
            <div class="form-group">
                <label for="sel3">Pilih Pegawai (idProyek):</label>
                <select class="form-control" id="sel3" name = "idProyek1">
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
            <label for="email">Tanggal Awal:</label>
            <input type="email" class="form-control" id="email2" placeholder="Format (yyyy-mm-dd hh:mm:ss)" name="tanggal0">
            </div>
            <div class="form-group">
            <label for="pwd">Tanggal Akhir</label>
            <input type="password" class="form-control" id="pwd2" placeholder="Format (yyyy-mm-dd hh:mm:ss)" name="tanggal01">
            </div>
            
           <button type="submit" class="btn btn-default">Submit</button>
        </fieldset>
    </form>
    </div>
    <div class="col-lg-4" allign = "center">
    </div>
</div>
</body>