<?php
include("connprc.php");

if(isset($_POST['submit'])){

	$email=$_POST['email'];
	$pswd=$_POST['password'];
    
    	$insert="INSERT INTO tbname(email,password)VALUES('$email','$pswd')";
    	$p = mysqli_query($conn, $insert);

  }       
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.btn{
			color: red;
			background-color: yellow;
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
		body{

			background-color: #9999ff;
		}
	</style>
</head>
<body>
<center>
		
<form action="index1.php" method="POST">
	<h1>Enter Your Details</h1>
	<input type="text" name="email" placeholder="enter your email id"><br><br>
	<input type="text" name="password" placeholder="enter your password"><br><br>

	<input type="submit" name="submit" value="Register" class="btn">

</form>

</center>
</body>
</html>