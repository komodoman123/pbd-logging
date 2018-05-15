<?php

$conn= new PDO("sqlsrv:Server=WINDOWS-PC\SQLEXPRESS;Database=logging");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
