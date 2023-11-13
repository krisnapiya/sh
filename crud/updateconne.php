<?php

include"conne.php";

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$pswd=$_POST['password'];

	$sql="UPDATE job SET name=$name,password=$pswd";

	$result=$conn->query($sql);

	if($result==TRUE)
	{
		echo"Successfull";

		header("location:view.php");
	}
	else{
		echo"Error";
	}
}
if(isset($_GET['id']))
{
	$u_id=$_GET['id'];

	$sql="SELECT * from job WHERE id=$u_id";

	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
         {
			$name=$row['name'];
			$pswd=$row['password'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
	Name:
	<input type="text" name="name"><br>
	Password:
	<input type="text" name="password"><br>
	<input type="button" value="submit" name="submit">
</body>
</html>
<?php
}
else{
	header('location:view.php');
}
}
?>
