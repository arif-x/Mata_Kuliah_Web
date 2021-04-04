<?php
include_once("toko_read.php");
?>

<html>
<head>    
	<title>Homepage</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
	<div style="padding-top: 30px;">
		<div class="container">
			<h1 class="text-center">Toko</h1>
			<div class="col-lg-12">	
				<table width='80%' border=1 align="center" class="table">

					<thead>
						<tr>
							<th class="text-center">No</th>
							<th class="text-center">Nama Barang</th>
							<th class="text-center">Jumlah</th>
						</tr>
					</thead>								
					<?php  
					$no = 1;
					while($jadwal = $getJadwal->fetch_array()) {                 
						echo "<td>".$no++."</td>";
						echo "<td>".$jadwal['nm_barang']."</td>";
						echo "<td>".$jadwal['jumlah']."</td>";

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