<?php

include_once("../server/connection.php");

$id = $_GET['id'];
$result = mysqli_query($connection, "DELETE FROM guestbook WHERE id='$id'");

if($result){
	header("Location: ../../frontend/guestbook/index.php");
} else {
	echo "Error";
}



?>