<?php 
session_start(); 

if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: frontend/auth/login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header('location: frontend/auth/login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
	<style type="text/css">
		.title {
			font-size: 84px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-success">
		<strong><a class="navbar-brand text-white" href="">Guestbook</a></strong>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				
			</ul>
			<div class="my-2 my-lg-0">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<strong><a class="nav-link text-white" href="frontend/guestbook/index.php">Lihat Guestbook</a></strong>						
					</li>
					<li class="nav-item active">
						<strong class="nav-link text-white">|</strong>
					</li>
					<li class="nav-item">
						<strong><a class="nav-link text-white" href="create.php">Tambah Guestbook</a></strong>
					</li>
					<li class="nav-item active">
						<strong class="nav-link text-white">|</strong>
					</li>
					<li class="nav-item">
						<strong><a  class="nav-link text-white" href="?logout='1'">Logout</a></strong>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="content mt-5">
		<h1 class="text-center">
			<strong><?php echo 'Selamat Datang ' . $_SESSION['username'] . ' Pada Hari ' . date("l") . ', ' . date("d-M-Y") ; ?></strong>
		</h1>
		<div class="row mt-5">
			<div class="col-md-3"></div>
			<div class="col-md-3">
				<a href="frontend/guestbook/" type="button" class="btn btn-success" style="width:100%">Lihat Guesbook</a>
			</div>
			<div class="col-md-3">
				<a href="frontend/guestbook/create.php" type="button" class="btn btn-success" style="width:100%">Tambah Guesbook</a>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>

</body>
</html>