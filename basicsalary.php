<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<hr color="red">
<center><h1>Basic Salary form</h1>
	<hr color="red">

		<form method="post" action="basicsalary.php">
		<table border="0">

			<tr>
				<td>Name of Employee</td><td><input type="text" name="nameofemployee"></td>
			</tr>

				<tr>

				   <td>Basic Salary</td><td><input type="text" name="basicsalary"></td>

		    	</tr>
             
             <tr>
				<td>HRA</td><td><input type="text" name="hra"></td><br>
			</tr>

			<tr>
				<td>Conveyance</td><td><input type="text" name="conveyance"></td>
			</tr>

			<tr>

             <tr>
				<td>Medical</td><td><input type="text" name="medical"></td>
			</tr>

			<tr>
				<td>Bonus</td><td><input type="text" name="bonus"></td>
			</tr>

             <tr>
				<td></td><td><input type="submit" value="submit" name="sub"></td>
			</tr>

			<tr>
				<td>Total</td><td><input type="text" name="total"></td>
			</tr>
            
		</table>
	</form>
</body>
</html>
<?php
if(isset($_POST['sub']))
{
	$a=$_POST['basicsalary'];
	$b=$_POST['hra'];
    $c=$_POST['conveyance'];
	$d=$_POST['medical'];
    $e=$_POST['bonus'];

	$k=$a+$b+$c+$d+$e;

	echo "<center>";
		
		echo "Total total is ".$c."<br>";
}


if(isset($_POST['sub']))
{
	$con=mysqli_connect('localhost','root','','form1');
	//check connection
	if(mysqli_connect_errno())
	{
		echo "failed to connect to MySQL:". mysqli_connect_error();
	}
	$sql="INSERT INTO basicsalary(nameofemployee, basicsalary, hra, conveyance,medical,bonus,total)VALUES('$_POST[nameofemployee]','$_POST[basicsalary]','$_POST[hra]','$_POST[conveyance]','$_POST[medical]','$_POST[bonus]','$_POST[total]')";

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