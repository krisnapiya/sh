<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<hr color="vilot">
<center><h1>Client form</h1>
	<hr color="vilot">

		<form method="post" action="clientform.php">
		<table border="0">

			<tr>
				<td>Your Name</td><td><input type="text" name="yourname"></td>
			</tr>

				<tr>
				<td>Your Password</td><td><input type="text" name="yourpassword"></td>
			</tr>
             
             <tr>
				<td>Manager for Approval</td><td><input type="text" name="managerforapproval"></td>
			</tr>

			<tr>
				<td>Reason for Purchase</td><td><textarea rows="4" cols="20" name="reasonforpurchase"></textarea>
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
	$sql="INSERT INTO clientform(yourname, yourpassword, managerforapproval, reasonforpurchase)VALUES('$_POST[yourname]','$_POST[yourpassword]','$_POST[managerforapproval]','$_POST[reasonforpurchase]')";

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