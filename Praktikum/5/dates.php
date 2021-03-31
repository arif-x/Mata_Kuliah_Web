<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="nav">
		<a href="index.html">INDEX</a>
		<a href="persegi.html">PERSEGI</a>
		<a href="biodata.html">BIODATA</a>
		<a class="active">DATE FORMAT</a>		
	</div>
	<div style="padding-top: 50px">
		<u><h1 class="text-center">DATE FORMAT</h1></u>
		<div class="container">
			<div class="col-12">
				<div class="text-center">
					<?php
					// Hari Sekarang
					echo date("l") . "<br>";

					// day, date, month, year, time, AM or PM
					echo date("l jS \of F Y h:i:s A") . "<br>";

					// day, date, month, year, time
					echo date("l jS \of F Y h:i:s") . "<br>";

					// d/m/Y
					echo date('d-m-Y') . "<br>";

					// d/M/y
					echo date('d-M-y') . "<br>";

					// d/m/y
					echo date('d-m-y') . "<br>";

					// Cek Hari
					echo "Oct 3,1975 was on a ".date("l", mktime(0,0,0,10,3,1975)) . "<br>";

					// DATE_RFC822 Format
					echo date(DATE_RFC822) . "<br>";

					// DATE_ATOM Format
					echo date(DATE_ATOM,mktime(0,0,0,10,3,1975));
					?>

				</div>
			</div>
		</div>
	</div>
</body>
</html>


<!DOCTYPE html>
<html>