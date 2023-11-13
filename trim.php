<?php

$string="   sunday is holiday for the schools  ";

echo(ltrim($string));

echo "<br>";

echo(rtrim($string));

echo "<br>";

var_dump(trim($string));

echo "<br>";

echo(trim($string, "sunday schools"));

?>