<?php
    try

{
include('connectdb.php');

}

catch(Exception $e)
{
  die( print_r($e->getMessage()));
}
$tsql = "select idPegawai from Pegawai ";
$getResults=$conn->prepare($tsql);
$getResults->execute();
$results=$getResults->fetchAll(PDO::FETCH_BOTH);

foreach ($results as $row) {
  echo "<option>".$row['idPegawai']."</option>"; 
}
?>
