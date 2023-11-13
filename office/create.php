<?php

include"conn.php";

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$dsgt=$_POST['deignation'];

	$sql="INSERT INTO staff(name,designation)VALUES('$name','$dsgt')";

	$result=$conn->query($sql);

	if($result==TRUE)
	{
		header('location:view.php');
	}
	else{
		echo "Error";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="POST">
	<br>
	Name:<input type="text" name="name" ><br><br>
	Designation:<input type="text" name="designation"><br><br>
	<input type="submit" name="submit">
</form>
</body>
</html>