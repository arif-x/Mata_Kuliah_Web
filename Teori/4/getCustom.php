<!DOCTYPE html>
<html>
<head>
  <title>Jumlah</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <?php
  class getCustom{
    public $a;
    public $b;
    public $c;
    public $d;
    public $e;
    public $jumlah;

    function setA($a){
      $this->a = $a;
    }

    function getA(){
      return $this->a;
    }

    function setB($b){
      $this->b = $b;
    }

    function getB(){
      return $this->b;
    }

    function setC($c){
      $this->c = $c;
    }

    function getC(){
      return $this->c;
    }

    function setD($d){
      $this->d = $d;
    }

    function getD(){
      return $this->d;
    }

    function setE($e){
      $this->e = $e;
    }

    function getE(){
      return $this->e;
    }

    function setJumlah($a, $b, $c, $d, $e){
      $this->a = $a;
      $this->b = $b;
      $this->c = $c;
      $this->d = $d;
      $this->e = $e;
      $this->jumlah = ((($a+$b)/($c*$d))-$e);
      // $this->jumlah = $e;
    }    

    public function getJumlah(){
      return $this->jumlah;
    }

  }

  $a = new getCustom();
  $a->setA($_GET['a']);
  $b = new getCustom();
  $b->setB($_GET['b']);
  $c = new getCustom();
  $c->setC($_GET['c']);
  $d = new getCustom();
  $d->setD($_GET['d']);
  $e = new getCustom();
  $e->setE($_GET['e']);

  $jumlah = new getCustom();
  $jumlah->setJumlah($a->getA(), $b->getB(), $c->getC(), $d->getD(), $e->getE());

  echo '<p><a href="javascript:history.go(-1)" title="back">&laquo;Back</a></p>';
  echo '((' . $a->getA() . ' + ' . $b->getB() . ') / (' . $c->getC() . ' * ' . $d->getD() . ') - ' . $e->getE() . ' = ' . $jumlah->getJumlah();

?>
</body>
</html>