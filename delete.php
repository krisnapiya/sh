<!DOCTYPE html>
<html>
<head>
	<title>Remove</title>
</head>
<body>
<center><h1>Fill form</h1>
	<hr color="red">
	<form method="post" action="">
	<table border="0">

		<tr>
			<td>ID</td>
			<td><input type="text" name="id"></td>
		</tr>

		<tr>
			<td><input type="submit" name="sub" value="remove"></td>
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
		echo "Failed to connect to Mysql: " . mysqli_connect_error();
	}
	$sql="delete from student where id='$_POST[id]'";
	if(!mysqli_query($con,$sql))
	{
		die('Error: ' . mysqli_error($con));
	}
	else
	{
		echo "1 Record Remove";
	}
	mysqli_close($con);
}
?>