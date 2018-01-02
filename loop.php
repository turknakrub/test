<?php

	$a =  1;
	//while
	while ( $a <= 10) {
		echo $a. ' Eiei <br>';
		$a++;

	};
	echo'<hr>';

	//do-while
	$b = 1;
	do{
		echo $b.".Hello <br>";
		$b++;

	}while ( $b <= 10);
	echo '<hr>';

	//for
	for ($i=1; $i <=10 ; $i++) { 
		echo $i.".For<br>";
	}
	echo'<hr>';

	//foreach
	$c = array('10','20');
	foreach ($c as $d) {
		echo $d.' ';
	}

?>