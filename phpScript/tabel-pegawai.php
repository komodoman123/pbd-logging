<?php
    try

{
$conn= new PDO("sqlsrv:Server=WINDOWS-PC\SQLEXPRESS;Database=logging");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}

catch(Exception $e)
{
  die( print_r($e->getMessage()));
}
$tsql = "select * from pegawai ";
$getResults=$conn->prepare($tsql);
$getResults->execute();
$results=$getResults->fetchAll(PDO::FETCH_BOTH);

foreach ($results as $row) {
  echo "<tr>";
  echo "<td>".$row['idpegawai']."</td>"; 
  echo "<td>".$row['namaPegawai']."</td>"; 
  //echo $row['idpegawai'].''.$row['namaPegawai'];
  echo '</tr>';
}
?>
