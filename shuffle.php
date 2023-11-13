<?php

$string="priya";

echo str_shuffle($string). "<br>";
echo md5($string). "<br>";
echo md5(str_shuffle($string));//mid5 function is converted text into hexa decimal

?>