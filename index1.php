<?php
include("connprc.php");

if(isset($_POST['submit'])){

	$email=$_POST['email'];
	$pswd=$_POST['password'];
	 $s= "SELECT * FROM tbname WHERE email='$email' && password='$pswd'";
	 if($s==TRUE)
    {
    echo "login successful";
    }
    else{
    	echo "<script> alert(email or password is not matching)</script";
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

			background-color: #9999ff;
		}
	</style>
</head>
<body>
	<center>
		
<form action="main.php " method="POST">
	<h1>SIGNUP</h1>
	<input type="text" name="email" placeholder="enter your email id"><br><br>
	<input type="password" name="password" placeholder="enter your password"><br><br>

	<input type="submit" name="submit" value="login" class="btn">
	<p>Are you a new user?&nbsp <a href="login1.php">Signup Here</a>
</form>

</center>
</body>
</html>

