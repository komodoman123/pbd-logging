<?php
try

{
include ('connectdb.php');

}

catch(Exception $e)
{
  die( print_r($e->getMessage()));
}
if (isset($_POST['idPegawai'])) {
    $id = $_POST['idPegawai'];
}
if (isset($_POST['tanggal1'])) {
    $tanggal1 = $_POST['tanggal1'];
}
if (isset($_POST['tanggal2'])) {
    $tanggal2 = $_POST['tanggal2'];
} 
else 
{
    echo "id not found";

}
$tsql = "exec gajiPerKaryawan ".$id.","."'".$tanggal1."'".","."'".$tanggal2."'";
$getResults=$conn->prepare($tsql);
$getResults->execute();
$results=$getResults->fetchAll(PDO::FETCH_BOTH);

foreach ($results as $row) {
    echo "<tr>";
    echo "<td>".$row['idProyek']."</td>";
    echo "<td>".$row['gaji']."</td>";
    echo "</tr>";
}
?>