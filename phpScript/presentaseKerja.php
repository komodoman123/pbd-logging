<?php
    try

{
include ('connectdb.php');

}

catch(Exception $e)
{
  die( print_r($e->getMessage()));
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];

} else {
    echo "id not found";

}

$persen=array();
$proyek=array();
$tsql = "exec presentaseKerja "."'2018-04-11','".date("Y-m-d") ."',".$id;
$getResults=$conn->prepare($tsql);
$getResults->execute();
$results=$getResults->fetchAll(PDO::FETCH_BOTH);

foreach ($results as $row) {
    echo "<tr>";
  echo "<td>".$row['idProyek']."</td>";
  echo "<td>".$row['presentase']."</td>";
  echo "</tr>";
  array_push($persen,$row['presentase']);
    array_push($proyek,$row['idProyek']);
}

?>
