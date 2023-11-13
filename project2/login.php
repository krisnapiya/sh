<?php
include("connection.php");

if(isset($_POST['submit'])){

	$email=$_POST['email'];
	$pswd=$_POST['password'];
	 $s= "SELECT * FROM shopping WHERE email='$email' && password='$pswd'";
	 if($s==TRUE)
    {
     header('location:index.php');
    }
    else{
    	echo "<script> alert(email or password is not matching)</script>";
    }}    
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
		input[type="password"]
		{
			background-color: pink;
			color: blue;
			font-size: 15px;
			width: 200px;
		}
		body{

			background-color: #e3ff8f;
		}
	</style>
</head>
<body>
    <div class="container-fluid">
	<div class="row">
  <div class="col-sm-2" style="top: 140px; left: 870px; position: absolute;">
		
<form action="" method="POST" class="was-validated">
<h1>SIGNUP</h1>
<div class="invalid-feedback">Please fill out this field.</div>
<input type="text" name="email" placeholder="enter your email id"><br><br>
<div class="invalid-feedback">Please fill out this field.</div>
	<input type="password" name="password" placeholder="enter your password"><br><br>

	<input type="submit" name="submit" value="login" class="btn">
	 <p><a href="login2.php">Are You New User</a></p>

</form>
</div></div>
<div class="row">
  <div class="col-sm-2" style="top: 10px; left: 50px; position: absolute;">
     <img src="img1.jpeg" class="mx-auto d-block" style="width: 700px; height: 500px;">
  	</div></div>
</div>
</body>
</html>
