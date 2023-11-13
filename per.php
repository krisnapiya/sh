<!DOCTYPE html>
<html>
<head>
	<title>Percentage</title>
</head>
<body>
<center>
	<form name="frm" method="post" action="per.php">
		<p>Maths:<input type="text" name="t1"></p>
		<p>English:<input type="text" name="t2"></p>
        <p>Computer:<input type="text" name="t3"></p>
		<p>Hindi:<input type="text" name="t4"></p>
		<p>Science:<input type="text" name="t5"></p>

		<p><input type="submit" name="sub" value="Total"></p>
	</form>
</center>
</body>
</html>
<?php
if(isset($_POST['sub']))
{
	$a=$_POST['t1'];
	$b=$_POST['t2'];
    $c=$_POST['t3'];
	$d=$_POST['t4'];
    $j=$_POST['t5'];

	$p=$a+$b+$c+$d+$j;

	echo "<center>";
		echo "Maths=" .$a. "<br>";
		echo "English=" .$b. "<br>";
        echo "Computer=" .$c. "<br>";
		echo "Hindi=" .$d. "<br>";
		echo "Science=" .$j. "<br><br>";

		echo "Total Mark  is ".$p."<br><br>";

		$k=$p*100/500;

		echo "Percentange is=" .$k. "<br>";
}
?>