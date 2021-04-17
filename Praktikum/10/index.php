<?php
include('connection.php');
include('fetch.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>File Upload & Download</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="lib/css/style.css">
</head>
<body>
	<div class="nav">		
		<strong><a href="">Upload & Download PHP MySQL</a></strong>
	</div>
	<div style="padding-top: 70px;">
		<div class="container">
			<div class="card" style="margin-bottom: 30px;">
				<div class="card-body">
					<form method="POST" action="upload.php" enctype="multipart/form-data">
						<div class="row">
							<div class="col-5">
								<label class="new-button" for="upload">File</label>
								<input type="file" name="userfile" style="border-width: 10px">
							</div>
							<div class="col-5">
								<label>Deskripsi</label>
								<input type="text" name="description">
							</div>
							<div class="col-2">
								<label style="color: #fff">.</label>
								<button type="submit" class="btn btn-green" name="upload" style="width: 100%; margin: auto;">Upload Now!</button>
							</div>
						</div>						
					</form>
				</div>	
			</div>			

			<table class="table">
				<tr>
					<th class="text-center">ID</th>
					<th class="text-center">Nama File</th>
					<th class="text-center">Tipe</th>
					<th class="text-center">Ukuran</th>
					<th class="text-center">Deskripsi</th>
					<th class="text-center">Download</th>
				</tr>
				<?php  
				while($files = $getFile->fetch_array()) {
					echo "<tr>";
					echo "<td>".$files['id']."</td>";
					echo "<td>".$files['name']."</td>";
					echo "<td>".$files['type']."</td>";
					echo "<td>".$files['size']."</td>";
					echo "<td>".$files['description']."</td>";
					echo '<td><a href="download.php?id='. $files['id'] .'">Download';
					echo "<tr>";
				}
				?>
			</table>
		</div>		
	</div>
</body>
</body>
</html>