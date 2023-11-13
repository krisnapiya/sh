<?php
session_start();
$user=$_POST['uid'];
$pass=$_POST['pwd'];
if($pass=="123")
{
	$_SESSION['user']=$user;
}
else
{
	header("location:login.html");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Session</title>
	<style>
		#header
		{
			width: 100%;
			height: 50px;
			background-color: skyblue;
			font-size: 20px;
		}
		#part1{
			width: 300px;
			height: 50px;
			float: left;
			margin-left: 25px;
			text-align: center;
		}
		#part2{
			width: 300px;
			height: 50px;
			float: right;
			margin-right: 25px;
			text-align: right;
		}
	</style>
</head>
<body>
 <div id="header">


 <div id="part1">
 	<?php echo "welcome " . $_SESSION['user']; ?>
 </div>

<div id="part2">
	<?php echo "<a href='des.php'>Logout</a>";  ?>
</div>

</div>
 </body>
</html>