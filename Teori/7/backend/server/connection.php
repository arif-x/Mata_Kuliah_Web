<?php

$databaseHost = 'localhost';
$databaseName = 'website';
$databaseUsername = 'root';
$databasePassword = '';

$connection = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

if($connection){
	
} else {
	echo "error";
}

?>