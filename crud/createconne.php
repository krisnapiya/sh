<?php

include"conne.php";

if(isset($_POST['submit']))
{

$name=$_POST['name'];
$pswd=$_POST['password'];

$sql="INSERT INTO job($name,$password)VALUES('$name','$pswd')";

$result=$conn->query($ql);

if($result==TRUE)
{
	echo" Successsfull";
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
<form action="" method="post">
	Name:
	<input type="text" name="name"><br>
	Password:
	<input type="text" name="password"><br>
	<input type="button" value="submit" name="submit">
</form>
</body>
</html>