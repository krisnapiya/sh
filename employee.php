<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<hr color="blue">
<center><h1>Employee form</h1>
	<hr color="blue">
	<form method="post" action="employee.php">
		<table border="0">
			<tr>
				<td>userName</td><td><input type="text" name="username"></td>
			</tr>
			<tr>
				<tr>
				<td>password</td><td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td>address</td><td><textarea rows="4" cols="20" name="address"></textarea>
			</tr>
			<tr>
				<td>gender</td><td><input type="text" name="gender"></td>
			</tr>
			<tr>
				<td>contact</td><td><input type="text" name="contact"></td>
			</tr>
			<tr>
				<td>country</td><td><input type="text" name="country"></td>
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
	$con=mysqli_connect('localhost','root','','form1');
	//check connection
	if(mysqli_connect_errno())
	{
		echo "failed to connect to MySQL:". mysqli_connect_error();
	}
	$sql="INSERT INTO employee(username, password, address, gender, contact, country)VALUES('$_POST[username]','$_POST[password]','$_POST[address]','$_POST[gender]','$_POST[contact]','$_POST[country]')";

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