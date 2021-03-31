<?php
include_once("connection.php");

$result = "SELECT * FROM bukutamu";
$getData = $connection->query($result);
?>

<html>
<head>    
	<title>Homepage</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
	<div style="margin-top: 30px;">
		<div class="container">
			<h1 class="text-center">Buku Tamu</h1>
			<div class="col-lg-12">	
				<table width='80%' border=1 align="center" class="table">

					<thead>
						<tr>
							<th class="text-center">ID</th>
							<th class="text-center">Nama</th>
							<th class="text-center">Email</th>
							<th class="text-center">Komentar</th>
						</tr>
					</thead>								
					<?php  
					while($user_data = $getData->fetch_array()) {                 
						echo "<td>".$user_data['id_bukutamu']."</td>";
						echo "<td>".$user_data['nama']."</td>";
						echo "<td>".$user_data['email']."</td>";
						echo "<td>".$user_data['komentar']."</td>";

						echo "</tr>";
					}
					?>
				</table>
			</div>
		</div>
	</div>
	<script src="js/main.js"/>
</body>
</html>