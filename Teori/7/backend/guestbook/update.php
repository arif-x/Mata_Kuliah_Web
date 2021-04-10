<?php

include_once("../server/connection.php");

$id = $_POST['id'];
$posted = $_POST['posted'];
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$message = $_POST['message'];

$result = mysqli_query($connection, "UPDATE guestbook SET posted='$posted', name='$name', email='$email', address='$address', message='$message' WHERE id = $id");

if($result){
	header("Location: ../../frontend/guestbook/index.php");
} else {
	echo "Error";
}


?>