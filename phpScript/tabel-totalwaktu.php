<?php
    try

{
include ('connectdb.php');

}

catch(Exception $e)
{
  die( print_r($e->getMessage()));
}
$tsql = "exec hitungWaktuProyek";
$getResults=$conn->prepare($tsql);
$getResults->execute();
$results=$getResults->fetchAll(PDO::FETCH_BOTH);

foreach ($results as $row) {
  echo "<tr>";
  echo "<td>".$row['idProyek']."</td>";
<<<<<<< HEAD
=======
  echo "<td>".$row['namaProyek']."</td>";  
>>>>>>> 9bde9b9fe4ded2ba0c2e4ee747fa58ff0cea7e9c
  echo "<td>".$row['totaljam']."</td>";
  //echo $row['idpegawai'].''.$row['namaPegawai'];
  echo '</tr>';
}
?>
