<?php

$ar=array(11,2,4,5);

$a=array(0=>12,1=>23,2=>21);

rsort($a); //reverse sort

foreach ($a as $k => $v)  //k==key //ismein array a ka values v mein jayega
{
	echo "$k   $v<br>";
}

$b=array("name" =>"Priya", "job"=>"IT", "place"=>"vasai");

ksort($b);  //key sort==ksort

foreach ($b as $k => $v) {
	echo "$k  $v<br>";
}
?>
