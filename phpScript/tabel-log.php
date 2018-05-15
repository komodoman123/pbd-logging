<?php
    try

{
include ('connectdb.php');

}

catch(Exception $e)
{
  die( print_r($e->getMessage()));
}
$halaman=100;
$offset=0;
if (isset($_GET['offset'])) {
    $offset = $_GET['offset']-1;

}

echo "<nav aria-label='Page navigation'>";
echo  "<ul class='pagination'>";
for ($x = 1; $x <= 10; $x++) {
      echo "<li class='page-item'><a class='page-link' href='logginmenu.php?offset=".$x."'>".$x."</a></li>";
}



echo"</ul>";
echo"</nav>";
$start=$offset * 1000;
$tsql = "select * FROM logg ORDER BY id asc OFFSET ". $start." ROWS FETCH NEXT 1000 ROWS ONLY";
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
