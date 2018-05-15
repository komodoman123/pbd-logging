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
$tsql = "select * from logg order by id asc";
$getResults=$conn->prepare($tsql);
$getResults->execute();
$results=$getResults->fetchAll(PDO::FETCH_BOTH);

foreach ($results as $row) {
  echo "<tr>";
  echo "<td>".$row['id']."</td>";
  echo "<td>".$row['idPegawai']."</td>"; 
  echo "<td>".$row['idProyek']."</td>";
  echo "<td>".$row['waktuIn']."</td>";
  echo "<td>".$row['waktuOut']."</td>";
  //echo $row['idpegawai'].''.$row['namaPegawai'];
  echo '</tr>';
}
?>
