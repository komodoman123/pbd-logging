<?php
    try

{
include ('connectdb.php');

}

catch(Exception $e)
{
  die( print_r($e->getMessage()));
}
$tsql = "exec jobAssignment ";
$getResults=$conn->prepare($tsql);
$getResults->execute();
$results=$getResults->fetchAll(PDO::FETCH_BOTH);

foreach ($results as $row) {
  echo "<tr>";
  echo "<td>".$row['idProyek']."</td>"; 
  echo "<td>".$row['namaProyek']."</td>";
  echo "<td>".$row['idPegawai']."</td>";
  echo "<td>".$row['namaPegawai']."</td>";
  //echo $row['idpegawai'].''.$row['namaPegawai'];
  echo '</tr>';
}
?>
