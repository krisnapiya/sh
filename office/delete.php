<?php

include"conn.php";

if(isset($_GET['id']))
{
	$u_id=$_GET['id'];

	$sql="DELETE * from staff WHERE id=$u-id";

	$result=conn->query($sql);

	if($result==TRUE)
	{
		header('location:view.php');
	}
	else{
		echo"Error";
	}
}
?>