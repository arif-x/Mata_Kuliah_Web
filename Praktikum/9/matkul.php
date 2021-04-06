<?php
include_once("matkul_read.php");
?>

<html>
<head>    
	<title>Mata Kuliah</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>	
	<div class="nav">		
		<a href="matkul.php">MATA KULIAH</a>	
		<a href="jadwal.php">JADWAL</a>
	</div>
	<div style="padding-top: 70px;">
		<div style="margin-bottom: 30px">
			<div class="container">
				<button id="myBtn" class="btn btn-green">Tambah Mata Kuliah</button>
			</div>
		</div>
		<div id="myModal" class="modal">
			<div class="modal-content">
				<span class="close">&times;</span>
				<h2>Tambah Mata Kuliah</h2>
				<form method="POST" action="matkul_insert.php">

					<div class="col-12">
						<label>Mata Kuliah</label>
						<input type="text" name="matkul" required>
					</div>

					<button type="submit" name="submit" class="btn btn-green full-width">Tambahkan</button>
				</form>
			</div>

		</div>
		<div class="container">
			<h1 class="text-center">Mata Kuliah</h1>
			<div class="col-lg-12">	
				<table width='80%' border=1 align="center" class="table">

					<thead>
						<tr>
							<th class="text-center">No</th>
							<th class="text-center">Mata Kuliah</th>
						</tr>
					</thead>								
					<?php  
					$no = 1;
					while($jadwal = $getMatkul->fetch_array()) {                 
						echo "<td>".$no++."</td>";
						echo "<td>".$jadwal['matkul']."</td>";

						echo "</tr>";
					}
					?>
				</table>
			</div>
		</div>
	</div>
	<script>
		var modal = document.getElementById("myModal");
		var btn = document.getElementById("myBtn");
		var span = document.getElementsByClassName("close")[0];
		btn.onclick = function() {
			modal.style.display = "block";
		}
		span.onclick = function() {
			modal.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>
</body>
</html>