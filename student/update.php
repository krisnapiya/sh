<?php

include"conn.php";

if(isset($_POST['update']))
{
	$name=$_POST['name'];
	$rollno=$_POST['rollno'];
	$division=$_POST['division'];

	$sql="UPDATE student SET name=$name,roll_no=$rollno,division=$division";

	$result=$conn->query($sql);

	if($result==TRUE)
	{
		
		header('loction:view.php');
	}
	else{
		echo"error";
	}
}
if(isset($_GET['id']))
{
	$u_id=$_GET['id'];

	$sql="SELECT * from student WHERE id=$u_id";

	$result=$conn->query($sql);

	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$name=$row['name'];
			$rollno=$row['roll_no'];
			$division=$row['division'];
		}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="POST">
	<br><br>
	Name:<input type="text" name="name"><br><br>
	Roll No:<input type="text" name="rollno"><br><br>
	Division:<input type="text" name="division"><br><br>
	<input type="submit" name="update"  value="update">
</form>
</body>
</html>
<?php
			{
				header('location:view.php');
			}
		}
		}


?>