<?php

$id = $_GET['id'];

$getResult = mysqli_query($connection, "SELECT * FROM guestbook WHERE id=$id");

while($data = mysqli_fetch_array($getResult))
{
	$id = $data['id'];
	$posted = $data['posted'];
	$name = $data['name'];	
	$email = $data['email'];	
	$address = $data['address'];
	$city = $data['city'];	
	$message = $data['message'];	
}

?>
