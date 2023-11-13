<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname="mydb";

$conn = new mysqli($servername, $username, $password, $dbname);

if(mysqli_connect_errno())
		{
        echo "Failed to connect to MySQL:". mysqli_connect_errno();
		}

		?>