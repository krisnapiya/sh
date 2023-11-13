<!DOCTYPE html>
<html>
<title>Radio</title>
</head>
<body>
<center>
	<h1>Quiz</h1>

	<form name="frm" method="post" action="">
		<p><b>What is the size of Danum Valley Conservation Area, Sabah?</b></p>
		<p><input type="radio" name="q1" value="250km">250km</p>
		<p><input type="radio" name="q1" value="120km">120km</p>
		<p><input type="radio" name="q1" value="438km">438km</p>

		<p><b>What is the first directed film of Steven Spielberg?</b></p>
		<p><input type="radio" name="q2" value="ishq">ishq</p>
		<p><input type="radio" name="q2" value="Firelight">Firelight</p>
		<p><input type="radio" name="q2" value="fight">fight</p>

		<p><b>What job involves walking an average of 60 miles in a 5 day week?</b></p>
		<p><input type="radio" name="q3" value="waiter">waiter</p>
		<p><input type="radio" name="q3" value="teacher">teacher</p>
		<p><input type="radio" name="q3" value="doctor">doctor</p>

		<p><b>Which country has its currency Lek?</b></p>
		<p><input type="radio" name="q4" value="India">India</p>
		<p><input type="radio" name="q4" value="UK">UK</p>
		<p><input type="radio" name="q4" value="Albania">Albania</p>

		<p><b>What is the species of Hyperion tree?</b></p>
		<p><input type="radio" name="q5" value="coconut tree">coconut tree</p>
		<p><input type="radio" name="q5" value="Coast redwood">Coast redwood</p>
		<p><input type="radio" name="q5" value="mango tree">mango tree</p>

		<p><input type="submit" name="sub" value="submit"></p>
         </form>
     </center>
</body>
</html>

<?php
if(isset($_POST['sub']))
{
	$q1=$_POST['q1'];
	$q2=$_POST['q2'];
	$q3=$_POST['q3'];
	$q4=$_POST['q4'];
	$q5=$_POST['q5'];
	$count=0;
	$total=5;
	if($q1=="438km")
	{
		$count++;
	}
	if($q2=="Firelight")
	{
		$count++;
	}
	if($q3=="waiter")
	{
		$count++;
	}
	if($q4=="Albania")
	{
		$count++;
	}
	if($q5=="coast redwood")
	{
		$count++;
	}
	echo "<center>";
	echo "<font color=red>Right Answer ".$count."</font><br>";
	echo "<font color=vilot>Wrong Answer ".($total-$count). "</font><br>";
}
?>