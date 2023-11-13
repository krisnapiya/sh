<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center><h1>Fill form </h1>
	<hr color="red">
	<form method="post" action="">
		<table border="0">
			
			<tr>
				<td>ID</td>
				<td><input type="text" name="id"></td>
			</tr>

			<tr>
				<td>Name</td>
				<td><input type="text" name="nm"></td>
			</tr>

			<tr>
				<td>Address</td>
				<td><textarea rows="4" cols="20" name="address"></textarea></td>
			</tr>

			<tr>
				<td>Fee</td>
				<td><input type="text" name="fe"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="sub"></td>
			</tr>

		</table>
	</form>
	
</center>
</body>
</html>

<?php

if(isset($_POST['sub']))
{
	$con=mysqli_connect('localhost','root','','priya');

		if(mysqli_connect_errno())
		{
        echo "Failed to connect to MySQL:". mysqli_connect_errno();
		}

		$sql="UPDATE student SET name='$_POST[nm]',address='$_POST[address]',fee='$_POST[fe]' where id='$_POST[id]'";
		if(!mysqli_query($con,$sql))
		{
			die('Error: '. mysqli_error($con));
		}
		else
		{
			echo "1 Record Updated";
		}
		mysqli_close($con);
}
?>