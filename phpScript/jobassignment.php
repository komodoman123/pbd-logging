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
$tsql = "exec employeeassignment ".$id;
$getResults=$conn->prepare($tsql);
$getResults->execute();
$results=$getResults->fetchAll(PDO::FETCH_BOTH);

foreach ($results as $row) {
    echo "<tr>";
  echo "<td>".$row['idproyek']."</td>";
  echo "<td>".$row['namaProyek']."</td>";
  echo "</tr>";
}
?>
