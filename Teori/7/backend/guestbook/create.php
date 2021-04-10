<?php

include_once("../server/connection.php");

$id = $_POST['id'];
$posted = $_POST['posted'];
$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];
$address = $_POST['address'];
$message = $_POST['message'];

$result = mysqli_query($connection, "INSERT INTO `guestbook`(`posted`, `name`, `address`, `city`, `email`, `message`) VALUES ('$posted', '$name', '$address', '$city', '$email', '$message')");

if($result){
	header("Location: ../../frontend/guestbook/index.php");
} else {
	echo "Error";
}

?>