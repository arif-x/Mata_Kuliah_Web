<?php

$uploadDir = 'file/';
if(isset($_POST['upload'])){		
	$fileName = $_FILES['userfile']['name'];
	$tmpName = $_FILES['userfile']['tmp_name'];
	$fileSize = $_FILES['userfile']['size'];
	$fileType = $_FILES['userfile']['type'];
	$filePath = $uploadDir . $fileName;
	$result = move_uploaded_file($tmpName, $filePath);
	$description = $_POST['description'];
	if($result){
		include_once("connection.php");
		$query = mysqli_query($connection, "INSERT INTO `upload`(`name`, `type`, `size`, `path`, `description`) VALUES ('$fileName', '$fileType', '$fileSize', '$filePath', '$description')");

		if($query){
			header("Location: index.php");
		}
	} else {
		echo "Error";
	}
}
?>