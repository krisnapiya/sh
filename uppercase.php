<?php

$string=" Ramu is living in a small village";
var_dump(ucwords($string));// har eak word ka first letter will be capital

echo "<br>";

$string="He is a farmer";
var_dump(strtoupper($string));// in full capital

echo "<br>";

$string="He lost his parents in his childhood";
var_dump(strtolower($string));// in full small letter
echo "<br>";
$str="priya";
var_dump(ucfirst($str));// first letter capital

echo "<br>";

$str="priya";
var_dump(lcfirst($str));// first letter small

?>