<?php

	class Calculator{
		public $request1;
		public $request2;
		public $operator;

		function setReq1($request1){
			$this->request1 = $request1;
		}

		function getReq1(){
			return $this->request1;
		}

		function setReq2($request2){
			$this->request2 = $request2;
		}

		function getReq2(){
			return $this->request2;
		}

		function setOperator($operator){
			$this->operator = $operator;
		}

		function getOperator(){
			return $this->operator;
		}

		function hasil($request1, $request2, $operator){
			$this->request1 = $request1;
			$this->request2 = $request2;
			$this->operator = $operator;
			if($this->operator == '+'){
				$hasil = $this->request1 + $this->request2;
				return $hasil;
			} elseif($this->operator == '-'){
				$hasil = $this->request1 - $this->request2;
				return $hasil;
			} elseif($this->operator == '*'){
				$hasil = $this->request1 * $this->request2;
				return $hasil;
			} elseif($this->operator == '/'){
				$hasil = $this->request1 / $this->request2;
				return $hasil;
			} elseif($this->operator == '%'){
				$hasil = $this->request1 % $this->request2;
				return $hasil;
			}
		}
	}

	echo '<p><a href="javascript:history.go(-1)" title="back">&laquo;Back</a></p>';
	
	$request1 = new Calculator();
	$request1->setReq1($_POST['input1']);
	echo 'Nilai Input 1 = ' . $request1->getReq1() . '<br>';

	$request2 = new Calculator();
	$request2->setReq2($_POST['input2']);
	echo 'Nilai Input 2 = ' . $request2->getReq2() . '<br>';

	$operator = new Calculator();
	$operator->setOperator($_POST['operator']);
	echo 'Operator = ' . '"' . $operator->getOperator() . '" <br>';

	$hasil = new Calculator();
	echo 'Hasil = ' . $hasil->hasil($request1->getReq1(), $request2->getReq2(), $operator->getOperator());

?>