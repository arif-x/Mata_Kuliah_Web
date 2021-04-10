<?php 
session_start(); 

if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../auth/login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header('location: ../auth/login.php');
}
?>

<?php
include_once("../../backend/server/connection.php");
include_once("../../backend/guestbook/get-id.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Guestbook</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-success">
		<strong><a class="navbar-brand text-white" href="../../">Guestbook</a></strong>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				
			</ul>
			<div class="my-2 my-lg-0">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<strong><a class="nav-link text-white" href="index.php">Lihat Guestbook</a></strong>	
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
	<div class="mt-5">
		<h1 class="text-center">Update Guestbook</h1>
		<div class="row">	
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="card">
					<div class="card-header bg-success text-white">
						<strong>Tambah</strong>
					</div>
					<div class="card-body">
						<form method="POST" action="../../backend/guestbook/update.php">
							<input id="id" type="hidden" name="id" class="form-control" value="<?php echo $id; ?>">
							<div class="form-group">
								<label for="posted">Dipost Pada</label>
								<?php $newDate = date("Y-m-d", strtotime($posted)); ?> 
								<input id="posted" type="date" name="posted" class="form-control" value="<?php echo $newDate; ?>">
							</div>
							<div class="form-group">
								<label for="name">Nama</label>
								<input id="name" type="text" name="name" class="form-control" value="<?php echo $name; ?>">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input id="email" type="text" name="email" class="form-control" value="<?php echo $email; ?>">
							</div>
							<div class="form-group">
								<label for="address">Alamat</label>
								<input id="address" type="text" name="address" class="form-control" value="<?php echo $address; ?>">
							</div>
							<div class="form-group">
								<label for="city">Kota/Kab</label>
								<input id="city" type="text" name="city" class="form-control" value="<?php echo $city; ?>">
							</div>
							<div class="form-group">
								<label for="message">Pesan</label>
								<textarea id="message" type="text" name="message" class="form-control"><?php echo $message; ?></textarea>
							</div>
							<button type="submit" class="btn btn-success" style="width:100%">Submit</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>	
</body>
</html>