<?php

include_once('connection.php');

$result = "SELECT matkul.matkul, jadwal.* FROM jadwal INNER JOIN matkul ON matkul.id_matkul = jadwal.id_matkul;";
$getJadwal = $connection->query($result);

?>