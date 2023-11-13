<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<?php

$a=$b=$c=$d=$e=$tot=$per="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$a=$_POST["t1"];
	$b=$_POST["t2"];
	$c=$_POST["t3"];
	$d=$_POST["t4"];
	$e=$_POST["t5"];

	$tot=$a+$b+$c+$d+$e;
	$per=$tot/5;
}
?>
<center>
<h2>Marksheet</h2>
<form method="post" action="<?php $_SERVER["PHP_SELF"];?>">
	<label>Math:</label><input type="text" name="t1" value="<?php echo $a;?>"><br><br>
	<label>Eng:</label><input type="text" name="t2" value="<?php echo $b;?>"><br><br>
	<label>Hindi:</label><input type="text" name="t3" value="<?php echo $c;?>"><br><br>
	<label>IT:</label><input type="text" name="t4" value="<?php echo $d;?>"><br><br>
	<label>Sci:</label><input type="text" name="t5" value="<?php echo $e;?>"><br><br><br>

	<input type="submit" name="submit" value="submit"><br><br><br>

    <label>Total:</label><input type="text" name="t6" value="<?php echo $tot;?>"><br><br>
    <label>Per:</label><input type="text" name="t7" value="<?php echo $per;?>"><br>
</form>
</center>
</body>
</html>