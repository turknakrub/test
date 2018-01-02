<?php

	function ShowData(){

		echo'Hello World';
		echo'<hr>';
	}

	function ShowData2(){

		$a = 'Hello <br>';
		return $a;

	}
	//วิธีการเรียกใช้ Funcition
	//ShowData();
	//echo ShowData2();
	//$e = ShowData2();
	//echo $e;
	
	/*function show($num1,$num2){

		$result = $num1 + $num2;
		echo 'ผลที่ได้คือ '.$result;
	}

	function show1($n1,$n2,$n3){
		$result = ($n1 + $n2 + $n3) /3;
		return $result;
	}

	//show(10,23);
	echo show1(14,36,75);*/

	$myname = "Puncharas"; //global var

	function MyName(){
		$myname = "Phosap"; // local var
		echo $myname;
	}

	//echo $myname;
	MyName();
?>