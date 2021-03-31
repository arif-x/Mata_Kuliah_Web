<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sorting</title>
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

function urutnama ($data)
{
	$arr = [];
	foreach ($data as $key) 
	{
	$arr[]=($key['nama']." ".$key['nim']."<br>");
	}
	sort($arr);
	return $arr;
};

function urutnim ($data)
{
	$arr = [];
	foreach ($data as $key) 
	{
	$arr[]=($key['nim']." ".$key['nama']."<br>");
	}
	rsort($arr);
	return $arr;
};

echo "Ascending by nama<br>";
foreach (urutnama($data) as $key)
{
echo $key . " ";
}

echo "<br>Desending by NIM <br>";
foreach (urutnim($data) as $key)
{
echo $key . " ";
}

?>
</body>
</html>