<?php
	$principal=100;
	$rate=2.5;
	$time=5;
	$si=$principal * $rate * $time;
	echo "Interest : " . $si;

	for ($i=0; $i < 10; $i++) { 
		echo $i;
		echo "<br>";
	}
	$i = 11;
	if ($i>10) { 
		echo "Above 10";
	}
	else{
		echo "Below 10";
	}
?>