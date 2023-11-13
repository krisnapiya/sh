<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center><h1>Login</h1>
	<hr color="red">
	<form name="frm" action="" method="post">
		<table border="0">

			<tr>
				<td>Your name</td><td><input type="text" name="t1"></td>
			</tr>

			<tr>
				<td>Your Password</td><td><input type="password" name="t2"></td>
            </tr>

            <tr>
            	<td></td><td><input type="submit" name="sub" value="Login"></td>
            </tr>
             
        </table>
    </form>
    <a href="clientform.php"> Click here, if you are a New User?</a>
</body>
</html>

<?php
if(isset($_POST['sub']))
{
	$k=0;
	$con=mysqli_connect('localhost','root','','form1');
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySQl: ".mysqli_connect_error();
	}
	$result=mysqli_query($con, "select * from clientform");
	while($row=mysqli_fetch_array($result))
	{
		if($row['yourname']==$_POST["t1"] && $row['yourpassword']==$_POST["t2"])
		{
			$k=1;
			break;
		}
	}
	if($k==1)
		header("location:welcome.php");
	else
		echo"<script>alert('invalid user or password') </script>";
	mysqli_close($con);
}

?>