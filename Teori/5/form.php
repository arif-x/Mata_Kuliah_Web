<?php
	
	class Form{

		public $nama;
		public $alamat;
		public $jenisKelamin;
		public $email;
		public $jawaban;

		function setNama($nama){
			$this->nama = $nama;
		}

		function getNama(){
			return $this->nama;
		}

		function setAlamat($alamat){
			$this->alamat = $alamat;
		}

		function getAlamat(){
			return $this->alamat;
		}

		function setJenisKelamin($jenisKelamin){
			$this->jenisKelamin = $jenisKelamin;
		}

		function getJenisKelamin(){
			return $this->jenisKelamin;
		}

		function setEmail($email){
			$this->email = $email;
		}

		function getEmail(){
			return $this->email;
		}

		function jawaban($jawaban){
			$this->jawaban = $jawaban;
			if($jawaban == 23){
				$statement = "Jawaban Benar";
				return $statement;
			} else {
				$statement = "Jawaban Salah";
				return $statement;
			}
		}
	}

	$nama = new Form();
	$nama->setNama($_POST['nama']);
	// echo $nama->getNama();

	$alamat = new Form();
	$alamat->setAlamat($_POST['alamat']);
	// echo $alamat->getAlamat();

	$jenisKelamin = new Form();
	$jenisKelamin->setJenisKelamin($_POST['jenisKelamin']);
	// echo $jenisKelamin->getJenisKelamin();

	$email = new Form();
	$email->setEmail($_POST['email']);
	// echo $email->getEmail();

	$jawaban = new Form();
	$jawaban->jawaban($_POST['jawaban']);
	// echo $jawaban->jawaban($_POST['jawaban']);

	echo '
	<!DOCTYPE html>
	<html>
	<head>
		<title>Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="container">
			<p><a href="javascript:history.go(-1)" title="back">&laquo;Back</a></p>
			<table class="full-width table">
				<tr>
					<th class="text-center">Nama</th>
					<th class="text-center">Alamat</th>
					<th class="text-center">Email</th>
					<th class="text-center">Jenis Kelamin</th>
					<th class="text-center">Jawaban</th>
				</tr>

				<tr>
					<td class="text-center">' . $nama->getNama() . '</td>
					<td class="text-center">' . $alamat->getAlamat() . '</td>
					<td class="text-center">' . $email->getEmail() . '</td>
					<td class="text-center">' . $jenisKelamin->getJenisKelamin() . '</td>
					<td class="text-center">' . $jawaban->jawaban($_POST['jawaban']) . '</td>
				</tr>
			</table>
		</div>
	</body>
	</html>
	';

?>