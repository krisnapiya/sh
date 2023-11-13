<?php

$hostname="localhost";
$username="root";
$password="";
$dbname="dress";

$conn=mysqli_connect($hostname,$username,$password,$dbname);
if(!$conn)//mysqli connect errno()
{
	echo" connection failed";
}
?>