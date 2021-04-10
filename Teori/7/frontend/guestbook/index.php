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
include_once("../../backend/guestbook/index.php");
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
		<h1 class="text-center">Guestbook</h1>
		<div class="col-md-12">	
			<table align="center" class="table table-striped">
				<thead>
					<tr>
						<th class="text-center">No</th>
						<th class="text-center">Dipost Pada</th>
						<th class="text-center">Nama</th>
						<th class="text-center">Email</th>
						<th class="text-center">Alamat</th>
						<th class="text-center">Kota</th>
						<th class="text-center">Pesan</th>
						<th class="text-center">Aksi</th>
					</tr>
				</thead>								
				<?php  
				$no = 1;
				while($guestbook = $getGuestbook->fetch_array()) {                 
					echo '<td class="text-center">'.$no++.'</td>';
					echo '<td class="text-center">'.$guestbook['posted'].'</td>';
					echo '<td class="text-center">'.$guestbook['name'].'</td>';
					echo '<td class="text-center">'.$guestbook['email'].'</td>';
					echo '<td class="text-center">'.$guestbook['address'].'</td>';
					echo '<td class="text-center">'.$guestbook['city'].'</td>';
					echo '<td>'.$guestbook['message'].'</td>';
					echo '<td class="text-center"><a type="button" class="btn btn-primary" href="update.php?id='. $guestbook['id'] .'">Update</a> | <a type="button" class="btn btn-danger" href="../../backend/guestbook/delete.php?id='. $guestbook['id'] .'">Delete</a></td>';

					echo '</tr>';
				}
				?>
			</table>
		</div>
	</div>	
</body>
</html>