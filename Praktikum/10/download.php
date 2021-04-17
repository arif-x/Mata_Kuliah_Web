<?php
include_once("connection.php");

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$getResult = mysqli_query($connection, "SELECT `path` FROM upload WHERE id=$id");
	while($data = mysqli_fetch_array($getResult)){
		$url = $data['path'];
	}
	clearstatcache();
	if(file_exists($url)) {
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename="'.basename($url).'"');
		header('Content-Length: ' . filesize($url));
		header('Pragma: public');
		flush();
		readfile($url,true);
		die();
		header("Location: index.php");
	} else {
		echo "File path does not exist.";
	}
}
echo "File path is not defined."

?>