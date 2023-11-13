<?php

include"conn.php";

if(isset($_GET['id']))
{
	$uid=$_GET['id'];

	$sql="DELETE from student WHERE id=$uid";

	$result=$conn->query($sql);

	if($result==TRUE)
	{
	
		header('location:view.php');
	}
	else{
		echo"error";
	}
}
?>