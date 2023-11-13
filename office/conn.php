<?php

$servername="localhost";
$username="root";
$password="";
$dbname="office";

$conn=new mysqli($servername,$username,$password,$dbname);

if(!$conn)
{
	echo"Error";
}
?>