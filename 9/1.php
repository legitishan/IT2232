<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lab9</title>
</head>
<body>
<?php
	$principal=100;
	$rate=2.5;
	$time=5;
	$si=$principal * $rate * $time;
	echo "Interest : " . $si;
?>

<?php
	for ($i=0; $i < 10; $i++) { 
		echo $i;
		echo "<br>";
	}
?>

<?php
	$i = 11;
	if ($i>10) { 
		echo "Above 10";
	}
	else{
		echo "Below 10";
	}
?>
</body>
</html>