<?php
  class Soal{
    public $nilai;
    public $bagiDua;

    function setNilai($nilai){
      $this->nilai = $nilai;
    }

    function getNilai(){
      return $this->nilai;
    }

    function setBagiDua($nilai){
      $this->nilai = $nilai;
      $this->bagiDua = $nilai/2;
    }

    function getBagiDua(){
      return $this->bagiDua;
    }

    function selection($bagiDua, $nilai){
      $this->nilai = $nilai;
      $this->bagiDua = $nilai/2;
      if($this->nilai %2 == 0){
        $statement = 'Nilai Bisa Dibagi Dua. Jadi Jawabannya ' . $this->bagiDua;
        return $statement;
      } else {
        $statement = 'Nilai Tidak Bisa Dibagi Dua. Jadi Jawabannya ' . $this->nilai;
        return $statement;
      }
    }

  }  

  echo '<p><a href="javascript:history.go(-1)" title="back">&laquo;Back</a></p>';
  $nilai = new Soal();
  $nilai->setNilai($_POST['nilai']);
  echo 'Nilai = ' . $nilai->getNilai() . '<br>';
  $bagiDua = new Soal();
  $bagiDua->setBagiDua($nilai->getNilai());
  echo 'Nilai Bagi Dua = ' . $bagiDua->getBagiDua() . '<br>';
  $selection = new Soal();
  echo '' . $selection->selection($bagiDua->getBagiDua(), $nilai->getNilai());

?>