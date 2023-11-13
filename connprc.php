<?php

$hostname="localhost";
$username="root";
$password="";
$dbname="db";

$conn=mysqli_connect($hostname,$username,$password,$dbname);
if(!$conn)//mysqli connect errno()
{
	echo" connection failed";
}
?>