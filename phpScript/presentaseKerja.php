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
$color = array("#2ecc71","#e74c3c","#34495e","#42f4e8","#f4e541","#f49741","#04f47c","#041cf4","#f40447","#c8f404");
$colorfix = array();
$tsql = "exec presentaseKerja "."'2018-04-11','".date("Y-m-d") ."',".$id;
$getResults=$conn->prepare($tsql);
$getResults->execute();
$results=$getResults->fetchAll(PDO::FETCH_BOTH);
$iter = 0;
foreach ($results as $row) {
  echo "<tr>";
  echo "<td>".$row['idProyek']."</td>";
  echo "<td>".number_format($row['presentase'],2)."%"."</td>";
  echo "</tr>";
  array_push($persen,number_format($row['presentase'], 2));
  array_push($proyek,$row['idProyek']);
  array_push($colorfix, $color[$iter]);
  $iter = $iter + 1;
}

?>
