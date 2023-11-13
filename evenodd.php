<!DOCTYPE html>
<html>
<head>
	<title>Even or Odd</title>
</head>
<body>
<center>
<form name="frm" method="post">

		<p>Enter the number:<input type="text" name="t1"></p>
		<p><input type="submit" name="sub" value="submit"></p>
	</form>
</center>
</body>
</html>
<?php

if($_POST)
{
	$n=$_POST['t1'];

	if(($n%2)==0)
	{
		echo "$n is Even";
	}
	else
	{
		echo "$n is Odd";
	}
}
?>