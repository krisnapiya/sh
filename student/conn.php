<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="collage";

$conn=new mysqli($servername,$username,$password,$dbname);

if(!$conn)
{
echo"error";
 }
?>
