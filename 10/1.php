<?php 
function Factorial($number){
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++){
      $factorial = $factorial * $i;
    }
    return $factorial;
}
echo "The factorial of 6 is ".Factorial(6)."<br>";



$array1=array("Hi","I'm","Ishan");
echo "<br>The second element is \"$array1[1]\"<br>";
foreach($array1 as $value)
{
	echo "$value <br>";
}
echo "</br>";



$array2 = array('Ishan' => 19 ,'Hospo' => 20 );
foreach($array2 as $x => $value)
{
	echo "$x = $value <br>";
}
echo "The value of Hospo is " . $array2['Hospo']."<br><br>";

?>