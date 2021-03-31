<?php
  class Modulus{
    public $req1;
    public $req2;
    public $jumlah;

    function setReq1($req1){
      $this->req1 = $req1;
    }

    function getReq1(){
      return $this->req1;
    }

    function setReq2($req2){
      $this->req2 = $req2;
    }

    function getReq2(){
      return $this->req2;
    }

    function setModulus($req1, $req2){
      $this->req1 = $req1;
      $this->req2 = $req2; 
      $this->jumlah = $this->req1 % $this->req2;
    }

    public function getModulus(){
      return $this->jumlah;
    }

  }

  $satu = new Modulus();
  $satu->setReq1($_GET['req1']);
  $dua = new Modulus();
  $dua->setReq2($_GET['req2']);
  $jumlah = new Modulus();
  $jumlah->setModulus($satu->getReq1(), $dua->getReq2());

  echo '<p><a href="javascript:history.go(-1)" title="back">&laquo;Back</a></p>';
  echo $satu->getReq1() . " Modulus ". $dua->getReq2() . " = " . $jumlah->getModulus();

?>