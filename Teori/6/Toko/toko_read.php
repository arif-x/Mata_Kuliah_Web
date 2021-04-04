<?php

include_once('connection.php');

$result = "SELECT * FROM barang";
$getJadwal = $connection->query($result);

?>