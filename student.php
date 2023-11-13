<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center><h1>Student form</h1>
	<hr color="red">
	<form method="post" action="student.php">
		<table border="0">
			<tr>
				<td>Name</td><td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Address</td><td><textarea rows="4" cols="20" name="address"></textarea>
			</tr>
			<tr>
				<td>fee</td><td><input type="text" name="fee"></td>
			</tr>
			<tr>
				<td></td><td><input type="submit" value="submit" name="sub"></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php
if(isset($_POST['sub']))
{
	$con=mysqli_connect('localhost','root','','priya');
	//check connection
	if(mysqli_connect_error())
	{
		echo "failed to connect to Mysql:". mysqli_connect_error();
	}
	$sql="INSERT INTO student(name, address, fee)VALUES('$_POST[name]','$_POST[address]','$_POST[fee]')";

	if(!mysqli_query($con,$sql))
	{
		die('Error: '.mysqli_error($con));
	}
	else
	{
		echo "1 record added";
	}
	mysqli_close($con);
}
?>