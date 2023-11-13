<!DOCTYPE html>
<html>
<head>
	<title>Multiplication</title>
</head>
<body>
<center>
	<form name="frm" method="post" action="mul.php">
		<p>Number1:<input type="text" name="t1"></p>
		<p>Number2:<input type="text" name="t2"></p>

		<p><input type="submit" name="sub" value="multi"></p>
	</form>
</center>
</body>
</html>

<?php
if(isset($_POST['sub']))
{
	$a=$_POST['t1'];
	$b=$_POST['t2'];

	$c=$a*$b;

	echo "<center>";
		echo "value of a=" .$a. "<br>";
		echo "value of b=" .$b. "<br>";
		echo "The multiplication is ".$c."<br>";
}
?>