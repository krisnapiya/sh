<?php
include("connection.php");
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
		
         input[type="number"]
		{
			background-color: pink;
			color: blue;
			font-size: 15px;
			width: 200px;
		}
		input[type="radio"]
		{
			background-color: pink;
			color: blue;
			font-size: 15px;
			width: 200px;
		}

		body{

			background-color: #e0d6ff;
		}
	</style>
</head>
<body>

		
<form action=" " method="POST">
	<h1>Fill the Details for purchasing</h1><br>
          
	<p>Size:<input type="radio" name="size" value="S">Small
		<input type="radio" name="size" value="M">Medium <input type="radio" name="size" value="L">Large</p><br>
	<p> Delivery Address:&nbsp<input type="text" name="address"></p><br>
	<p>Quantity:<input type="number" name="qty"></p><br><br>

	<input type="submit" name="submit" value="Total" class="btn">

	
</form>




</body>
</html>

