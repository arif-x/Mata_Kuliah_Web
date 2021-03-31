<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php 
$data= array
(
	'0' => array
	(
	'nama' => 'Ali', 
	'nim' => '18650001',
	'kelas' => 'A',
	'nilai' => 'A',
	'Dosen wali' => 'Romli',
	'status' => 'aktif'
    ),
    '1' => array
	(
	'nama' => 'Safii', 
	'nim' => '18650002',
	'kelas' => 'B',
	'nilai' => 'A',
	'Dosen wali' => 'Rois',
	'status' => 'tidak'
    ),
    '2' => array
	(
	'nama' => 'Putri', 
	'nim' => '18650003',
	'kelas' => 'B',
	'nilai' => 'A',
	'Dosen wali' => 'Sofiyullah',
	'status' => 'aktif'
    ),
    '3' => array
	(
	'nama' => 'Eka', 
	'nim' => '18650004',
	'kelas' => 'B',
	'nilai' => 'C',
	'Dosen wali' => 'Rois',
	'status' => 'tidak'
    ),
    '4' => array
	(
	'nama' => 'Saleho', 
	'nim' => '19650045',
	'kelas' => 'B',
	'nilai' => 'A',
	'Dosen wali' => 'Sofiyullah',
	'status' => 'aktif'
    ),
    '5' => array
	(
	'nama' => 'Paijo', 
	'nim' => '19650165',
	'kelas' => 'A',
	'nilai' => 'C',
	'Dosen wali' => 'Romli',
	'status' => 'tidak'
    ),
    '6' => array
	(
	'nama' => 'Paimin', 
	'nim' => '19650028',
	'kelas' => 'B',
	'nilai' => 'A',
	'Dosen wali' => 'Sofiyullah',
	'status' => 'aktif'
    )
);

	function cek($nim)
	{
		global $i;
		if ($i['nim']==$nim) {
		return $i['nama'];
			}
	};
	sort($data);
		foreach ($data as $i): 
			if ($i['Dosen wali'] == 'Sofiyullah') {
				if ($i['kelas']=='A' || $i['nilai']=='A') {
					if ($i['nilai']=='A') {
						if ($i['status']=='aktif') {
							echo cek($i['nim']).' adalah mahasiswa kelas '.$i['kelas']. ' yang aktif di Jurusan Teknik Informatika'. '<br>';
						}
					}
				}
			}
		endforeach;

?>
</body>
</html>