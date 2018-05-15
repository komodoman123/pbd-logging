<?php
    try

{
include ('connectdb.php');

}

catch(Exception $e)
{
  die( print_r($e->getMessage()));
}
if (isset($_POST["idPegawai"])&&isset($_POST["idProyek"])&&isset($_POST["tanggal12"])&&isset($_POST["tanggal22"])) {
  echo '<script language="javascript">';
echo 'alert("input berhasil dimasukkan")';
echo '</script>';

$tsql = "exec insertinto ".$_POST["idPegawai"].",".$_POST["idProyek"].",'".$_POST["tanggal12"]."','".$_POST["tanggal22"]."'";
$getResults=$conn->prepare($tsql);
$getResults->execute();
/*
  echo $_POST["idPegawai"];
  echo $_POST["idProyek"];
  echo $_POST["tanggal12"];
  echo $_POST["tanggal22"];
*/
}


 else {


}




?>
