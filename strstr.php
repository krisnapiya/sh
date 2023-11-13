<?php

$string=" white is the peaceful colour ";
$needle="attractive";

echo "strstr: ";
var_dump(strstr($string, $needle));//ismein agar mein needle mein "the" use karega to variable string mein "the" se print karega or word count hoyega with space

echo"<br>";

$needle="the";
echo "strstr: ";
var_dump(strstr($string, $needle));
echo "<br>";
echo "stristr : ";
 var_dump(stristr($string, $needle));

 echo "<br>";

 $position=strpos($string,"peaceful");
 echo "Posiotion of 'peacful' is $position <br>";

 $result=substr($string,strpos($string, "peaceful"),12);
 echo "8 character after finding the position of 'peaceful' : $result<br>";

 $new_string=str_replace("peaceful", "attractive", $string);

 echo $new_string;

?>