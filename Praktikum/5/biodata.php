<?php
class Biodata{
  public $nama;
  public $alamat;
  public $tempatLahir;
  public $tanggalLahir;
  public $pekerjaan;
  public $instansi;
  public $agama;
  public $statusPernikahan;

  function setnama($nama){
    $this->nama = $nama;
  }

  function getnama(){
    return $this->nama;
  }

  function setalamat($alamat){
    $this->alamat = $alamat;
  }

  function getalamat(){
    return $this->alamat;
  }

  function setTempatLahir($tempatLahir){
    $this->tempatLahir = $tempatLahir;
  }

  function getTempatLahir(){
    return $this->tempatLahir;
  }

  function setTanggalLahir($tanggalLahir){
    $this->tanggalLahir = $tanggalLahir;
  }

  function getTanggalLahir(){
    return $this->tanggalLahir;
  }

  function setPekerjaan($pekerjaan){
    $this->pekerjaan = $pekerjaan;
  }

  function getPekerjaan(){
    return $this->pekerjaan;
  }

  function setInstansi($instansi){
    $this->instansi = $instansi;
  }

  function getInstansi(){
    return $this->instansi;
  }

  function setAgama($agama){
    $this->agama = $agama;
  }

  function getAgama(){
    return $this->agama;
  }

  function setStatusPernikahan($statusPernikahan){
    $this->statusPernikahan = $statusPernikahan;
  }

  function getStatusPernikahan(){
    return $this->statusPernikahan;
  }

}

$nama = new Biodata();
$nama->setNama($_POST['nama']);

$alamat = new Biodata();
$alamat->setAlamat($_POST['alamat']);

$tempatLahir = new Biodata();
$tempatLahir->setTempatLahir($_POST['tempatLahir']);

$tanggalLahir = new Biodata();
$tanggalLahir->setTanggalLahir($_POST['tanggalLahir']);

$pekerjaan = new Biodata();
$pekerjaan->setPekerjaan($_POST['pekerjaan']);

$instansi = new Biodata();
$instansi->setInstansi($_POST['instansi']);

$agama = new Biodata();
$agama->setAgama($_POST['agama']);

$statusPernikahan = new Biodata();
$statusPernikahan->setStatusPernikahan($_POST['statusPernikahan']);

echo '<p><a href="javascript:history.go(-1)" title="back">&laquo;Back</a></p>';
echo 'Nama : ' . $nama->getNama() . '<br>';
echo 'Alamat : ' . $alamat->getalamat() . '<br>';
echo 'Tempat, Tanggal Lahir : ' . $tempatLahir->getTempatLahir() . ', ' . $tanggalLahir->getTanggalLahir() . '<br>';
echo 'Pekerjaan : ' . $pekerjaan->getPekerjaan() . '<br>';
echo 'Instansi : ' . $instansi->getInstansi() . '<br>';
echo 'Agama : ' . $agama->getAgama() . '<br>';
echo 'Status Pernikahan : ' . $statusPernikahan->getStatusPernikahan() . '<br>';

?>