<?php

$servername="localhost";
$usernme="root";
$password="";
$dbname="dbnew";

$conn=new mysqli($servername,$username,$password,$dbname);

if(!$conn)
{
	echo "The connection is failed";
}

