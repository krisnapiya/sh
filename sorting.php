<?php
$P=array("Priya", "Aditi", "Nisha", "Pratiksha", "Mohan");

sort($P);

echo "<strong><u>Sorted on the value with re generated key: </u></strong><br>";

foreach ($P as $k => $v) 
{
	echo "the key is:" .$k ."and its value is:" .$v."<br>";
}

$P=array("Priya", "Aditi", "Nisha", "Pratiksha", "Mohan");

rsort($P);
echo "<br><strong><u>Sorted in reverse order on the value with re generated key:</u></strong><br>";
foreach ($P as $k => $v) 
{
	echo "the key is:" .$k. "and its value is:"  .$v .
	"<br>";
}
$P=array("Priya", "Aditi", "Nisha", "Pratiksha", "Mohan");
asort($P);
echo "<br><strong><u>Sorted in order of value with key not change:</u></strong><br>";
foreach ($P as $k=> $v) 
{
	echo "the key is:" .$k . "and its value is:" .$v ."<br>";
}
$P=array("Priya", "Aditi", "Nisha", "Pratiksha", "Mohan");
ksort($P);
echo"<br><strong><u>Sorted in order based on key:</u></strong><br>";

foreach ($P as $k => $v)
{
  echo "the key is:" .$k ."and its value is:" .$v."<br>";
}
$P=array("Priya", "Aditi", "Nisha", "Pratiksha", "Mohan");
krsort($P);
echo "<br><strong><u>Sorted in reverse order based on key:</u></strong><br>";
foreach ($P as $k => $v) 
 {
	"the key is:" .$k ."and its value is:" .$v."<br>";
}
?>