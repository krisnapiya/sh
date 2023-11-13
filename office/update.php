<?php

include"conn.php";

if(isset($_POST['update']))
{
	$name=$_POST['name'];
	$dsgt=$_POST['designation'];

	$sql="UPDATE staff SET name=$name,designation=$dsgt";

	$result=conn->query($sql);

	if($result==TRUE)
	{
		header('location:view.php');
	}
	else{
		echo" Error";
	}
}

if(isset($_GET['id']))
{
	$u_id=$_GET['id'];

	$sql="SELECT * FROM staff WHERE id=u_id";

	$result=conn->query($sql);

	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$name=$row['name'];
			$dsgt=$row['designation'];
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
	<input type="update" name="update">
</form>
		</body>
		</html>

		<?php
		}
		else{
			header('location:view.php');
		}
	}

?>