<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

if(isset($_POST['submit'])) {
	$matkul = $_POST['matkul'];
	$hari = $_POST['hari'];
	$jam = $_POST['jam'];
	$ruang = $_POST['ruang'];

	include_once('connection.php');

	$result = mysqli_query($connection, "INSERT INTO jadwal (id_matkul, hari, jam, ruang) VALUES ('$matkul', '$hari', '$jam', '$ruang')");

	echo $result;
	
	if(!$result){
		echo("Error description: " . mysqli_error($connection));
	}else {
		header('location: jadwal.php');
	}

}
?>