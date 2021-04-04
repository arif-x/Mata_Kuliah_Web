<?php

include_once('connection.php');

$result = "SELECT * FROM matkul";
$getMatkul = $connection->query($result);

?>