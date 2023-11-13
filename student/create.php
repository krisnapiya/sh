<?php

include"conn.php";

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$rollno=$_POST['rollno'];
	$division=$_POST['division'];

	$sql="INSERT INTO student(name,roll_no,division)VALUES('$name','$rollno','$division')";

	$result=$conn->query($sql);

	if($result==TRUE)
	{
		echo"success";
		header('location:view.php');
    }
    else{
    	echo "error";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action=""  method="POST">
	<br><br>
	Name:<input type="text" name="name"><br><br>
	Roll No:<input type="text" name="rollno"><br><br>
	Division:<input type="text" name="division"><br><br>
	<input type="submit" name="submit" class="btn">
</form>
</body>
</html>