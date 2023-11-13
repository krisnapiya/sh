<?php

include("connprc.php");


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.btn{
			color: yellow;
			background-color: black;
			font-size: 15px;
			font-weight: 4px;
			width: 100px;
			border-radius: 3px;
			border: 2px solid pink;
			height: 25px;
			padding-left: 30px;
		}
		input[type="text"]
		{
			background-color: pink;
			color: blue;
			font-size: 15px;
			width: 200px;
		}
		input[type="password"]
		{
			background-color: pink;
			color: blue;
			font-size: 15px;
			width: 200px;
		}
         input[type="number"]
		{
			background-color: pink;
			color: blue;
			font-size: 15px;
			width: 200px;
		}

		body{

			background-color: #b3ffff;
		}
	</style>
</head>
<body>
<center>
		
<form action="insert.php " method="POST">
	<h1>Registration Form</h1>
	<p>UserName:&nbsp<input type="text" name="username"></p><br>
	<p>Password:&nbsp<input type="password" name="password"></p><br>
	<p>Address:&nbsp<input type="text" name="address"></p><br>
	<p>Contact Number:<input type="number" name="number"></p><br><br>

	<input type="submit" name="submit" value="submit" class="btn">
	
</form>

</center>
</body>
</html>