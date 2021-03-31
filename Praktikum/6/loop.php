<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Loop</title>
</head>
<body>
<?php 

$data = array
(
	'0' => array
	(
	'nama' => 'Ali', 
	'nim' => '18650001',
	'ipk' => '3.65',
	'rambut' => 'hitam lurus',
	'berat' => '65',
	'tinggi' => '169',
	'status' => 'aktif'
    ),
    '1' => array
	(
	'nama' => 'Safii', 
	'nim' => '18650002',
	'ipk' => '3.60',
	'rambut' => 'hitam gelombang',
	'berat' => '63',
	'tinggi' => '168',
	'status' => 'cuti'
    ),
    '2' => array
	(
	'nama' => 'Putri', 
	'nim' => '18650003',
	'ipk' => '3.20',
	'rambut' => 'hitam lurus',
	'berat' => '50',
	'tinggi' => '160',
	'status' => 'aktif'
    ),
    '3' => array
	(
	'nama' => 'Eka', 
	'nim' => '18650004',
	'ipk' => '3.15',
	'rambut' => 'hitam gelombang',
	'berat' => '50',
	'tinggi' => '160',
	'status' => 'aktif'
    ),
    '4' => array
	(
	'nama' => 'Saleho', 
	'nim' => '18650005',
	'ipk' => '3.60',
	'rambut' => 'hitam lurus',
	'berat' => '70',
	'tinggi' => '173',
	'status' => 'aktif'
    ),
    '5' => array
	(
	'nama' => 'Paijo', 
	'nim' => '18650006',
	'ipk' => '3.150',
	'rambut' => 'hitam lurus',
	'berat' => '50',
	'tinggi' => '160',
	'status' => 'aktif'
    ),
    '6' => array
	(
	'nama' => 'Paimin', 
	'nim' => '18650007',
	'ipk' => '3.10',
	'rambut' => 'hitam lurus',
	'berat' => '50',
	'tinggi' => '160',
	'status' => 'aktif'
    )
);

$arrlenght = count($data);
echo "If-else <br>";
echo("Mahasiswa yang menuhi semua syarat : <br>");
for ($i=0; $i < $arrlenght; $i++)
{ 
	if ($data[$i]['ipk']>3 && $data[$i]['ipk']<3.25
		&& $data[$i]['rambut']=='hitam lurus'
		&& $data[$i]['berat']=='50'
		&& $data[$i]['tinggi']=='160'
		&& $data[$i]['status']!='cuti')
	{
	echo($data[$i]['nim']." ");
	echo($data[$i]['nama']."<br>");
	} else{

	}
}

//switch case
echo "<br>Switch-case <br>";
echo("Mahasiswa yang menuhi semua syarat : <br>");
for ($i=0; $i < $arrlenght; $i++)
{ 
switch ($arrlenght) 
	{
	case ($data[$i]['ipk']>3 && $data[$i]['ipk']<3.25
		&& $data[$i]['rambut']=='hitam lurus'
		&& $data[$i]['berat']=='50'
		&& $data[$i]['tinggi']=='160'
		&& $data[$i]['status']!='cuti'):

		echo($data[$i]['nim']." ");
		echo($data[$i]['nama']."<br>");
		break;

	default:
		break;
	}
}

//do-while
echo "<br>Do-while <br>";
echo("Mahasiswa yang menuhi semua syarat : <br>"); 
$i=0; 
do {
	if ($data[$i]['ipk']>3 && $data[$i]['ipk']<3.25
		&& $data[$i]['rambut']=='hitam lurus'
		&& $data[$i]['berat']=='50'
		&& $data[$i]['tinggi']=='160'
		&& $data[$i]['status']!='cuti')
	{
		echo($data[$i]['nim']." ");
		echo($data[$i]['nama']."<br>");
	} else{

	}
	$i++;
} while ($i < $arrlenght);

//do-while
echo "<br>While <br>";
echo("Mahasiswa yang menuhi semua syarat : <br>"); 
$j=0; 
while ($j < $arrlenght) {
		if ($data[$j]['ipk']>3 && $data[$j]['ipk']<3.25
		&& $data[$j]['rambut']=='hitam lurus'
		&& $data[$j]['berat']=='50'
		&& $data[$j]['tinggi']=='160'
		&& $data[$j]['status']!='cuti')
	{
		echo($data[$j]['nim']." ");
		echo($data[$j]['nama']."<br>");
	} else{

	}
	$j++;
	}	
 ?>
</body>
</html>