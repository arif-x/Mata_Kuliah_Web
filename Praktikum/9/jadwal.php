<?php
include_once("jadwal_read.php");
include_once("matkul_read.php");
?>

<html>
<head>    
	<title>Homepage</title>
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
				<button id="myBtn" class="btn btn-green">Tambah Jadwal</button>
			</div>
		</div>
		<div id="myModal" class="modal">
			<div class="modal-content">
				<span class="close">&times;</span>
				<h2>Tambah Jadwal</h2>
				<form method="POST" action="jadwal_insert.php">

					<div class="row">
					<div class="col-6">
						<label>Hari</label>
						<select name="hari" style="width: 100%; border-radius: 5px; padding: 5px 16px;">
							<option selected="false">Pilih</option>
							<option value="Senin">Senin</option>
							<option value="Selasa">Selasa</option>
							<option value="Rabu">Rabu</option>
							<option value="Kamis">Kamis</option>
							<option value="Jumat">Jumat</option>
						</select>
					</div>

					<div class="col-6">
						<label>Jam</label>
						<input type="time" name="jam" class="without_ampm" required>
					</div>
					</div>

					<div class="row">
					<div class="col-6">
						<label>Ruang</label>
						<input type="text" name="ruang" required>
					</div>

					<div class="col-6">
						<label>Mata Kuliah</label>
						<select name="matkul" style="width: 100%; border-radius: 5px; padding: 5px 16px;">
							<option selected="false">Pilih</option>
							<?php  
							while($matkul = $getMatkul->fetch_array()) { 
								echo "<option value='" . $matkul['id_matkul'] . "'>" . $matkul['matkul'] . "</option>";
							}
							?>
						</select>
					</div>
					</div>


					<button type="submit" name="submit" class="btn btn-green full-width">Tambahkan</button>
				</form>
			</div>

		</div>
		<div class="container">
			<h1 class="text-center">Jadwal Kuliah</h1>
			<div class="col-lg-12">	
				<table width='80%' border=1 align="center" class="table">

					<thead>
						<tr>
							<th class="text-center">No</th>
							<th class="text-center">Mata Kuliah</th>
							<th class="text-center">Hari</th>
							<th class="text-center">Jam</th>
							<th class="text-center">Ruang</th>
						</tr>
					</thead>								
					<?php  
					$no = 1;
					while($jadwal = $getJadwal->fetch_array()) {                 
						echo "<td>".$no++."</td>";
						echo "<td>".$jadwal['matkul']."</td>";
						echo "<td>".$jadwal['hari']."</td>";
						echo "<td>".$jadwal['jam']."</td>";
						echo "<td>".$jadwal['ruang']."</td>";

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