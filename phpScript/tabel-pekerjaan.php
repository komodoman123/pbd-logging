<?php
    try

{
$conn= new PDO("sqlsrv:Server=DESKTOP-RELACFJ;Database=master");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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
  echo "<td>".$row['temp.idProyek']."</td>"; 
  echo "<td>".$row['temp.namaProyek']."</td>";
  echo "<td>".$row['temp.idPegawai']."</td>";
  echo "<td>".$row['pegawai.namaPegawai']."</td>";
  //echo $row['idpegawai'].''.$row['namaPegawai'];
  echo '</tr>';
}
?>
