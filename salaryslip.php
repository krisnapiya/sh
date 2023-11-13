<!DOCTYPE html>
<html>
<head>
	<title>Salary Slip</title>
</head>
<body>
<?php
$a=$b=$c=$d=$tot="";
$e=$f=$ded=$k="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$a=$_POST["x"];
	$b=$_POST["y"];
	$c=$_POST["z"];
	$d=$_POST["q"];


	
	$tot=$a+$b+$c+$d;
	$k=$tot;
    
    $e=$_POST["t1"];
	$f=$_POST["t2"];
	
	

	$ded=$k-$e-$f;

   }
?>
<h3>Earnings</h3>
<form method="post" action="<?php $_SERVER["PHP_SELF"];?>">
	<label>Basic Wage:</label><input type="text" name="x" value="<?php echo $a;?>"><br><br>
	<label>House Rent:</label><input type="text" name="y" value="<?php echo $b;?>"><br><br>
	<label>Conveyance:</label><input type="text" name="z" value="<?php echo $c;?>"><br><br>
	<label>Medical Allowance:</label><input type="text" name="q" value="<?php echo $d;?>"><br><br>
    

	<input type="submit" name="submit" value="submit"><br><br><br>

	

	<form method="post" action="<?php $_SERVER["PHP_SELF"];?>">
	<label>EPF:</label><input type="text" name="t1" value="<?php echo $e;?>"><br><br>
	<label>ESI/Health insurance:</label><input type="text" name="t2" value="<?php echo $f;?>"><br><br>
	
	
	

	<input type="submit" name="submit" value="submit"><br><br><br>

	<label>Total Earning:</label><input type="text" name="s" value="<?php echo $ded;?>"><br><br>
</form>
</body>
</html>