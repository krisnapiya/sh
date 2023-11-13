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

<?php

if(isset($_POST['submit']))
{
	$filename= $_FILES["uploadfile"]["qty"];
	$tempname= $_FILES["uploadfile"]["tmp_name"];
	$folder="./img/" . $filename;

	$name=$_POST['qty'];
	$db=mysqli_connect("localhost","root","","dress");

	//get all the submitted data from the form
	$sql= "INSERT INTO purchase(qty,img) VALUES ('$qty','$filename')";

	//execute query
	mysqli_query($db, $sql);

	//now lets move the uploaded image into the folder: image

	if(move_uploaded_file($tempname, $folder)) {
		echo "<h3> image uploaded sucessfully</h3>";
	}else{
		echo "<h3> failed to upload image</h3>";
	}
}
	 ?>