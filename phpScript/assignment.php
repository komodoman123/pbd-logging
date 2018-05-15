<?php
    try

{
include ('connectdb.php');

}

catch(Exception $e)
{
  die( print_r($e->getMessage()));
}
if (isset($_GET['idProyek'])) {
    $id = $_GET['idProyek'];

} else {
    echo "id not found";

}


$tsql = "exec jobAssignment ".$id;
$getResults=$conn->prepare($tsql);
$getResults->execute();
$results=$getResults->fetchAll(PDO::FETCH_BOTH);

foreach ($results as $row) {
    echo "<tr>";
  echo "<td>".$row['idPegawai']."</td>";
  echo "<td>".$row['namaPegawai']."</td>";
  echo "</tr>";

}

?>
