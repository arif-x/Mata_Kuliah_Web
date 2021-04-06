<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

if(isset($_POST['submit'])) {
	$matkul = $_POST['matkul'];
	include_once('connection.php');

	$result = mysqli_query($connection, "INSERT INTO matkul (matkul) VALUES ('$matkul')");

	echo $result;
	
	if(!$result){
		echo("Error description: " . mysqli_error($connection));
	}else {
		header('location: matkul.php');
	}

}
?>