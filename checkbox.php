<!DOCTYPE html>
<html>
<head>
	<title>checkbox</title>
</head>
<body>
<center>
	<form action="#" method="post">
		<input type="checkbox" name="check_list[]" value="Doctor"><label>Doctor</label><br><br>
		<input type="checkbox" name="check_list[]" value="Teacher"><label>Teacher</label><br><br>
		<input type="checkbox" name="check_list[]" value="Programmer"><label>Programmer</label><br><br>
		<input type="submit" name="submit" value="submit">
	</form>
</center>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	echo "<center>";

	if(!empty($_POST['check_list']))
	{
		echo "<h1>Your profession is </h1>";
		foreach($_POST['check_list'] as $selected)
		{
			echo $selected. "<br>";
		}
	}
	else
	{
   echo "please check your profession";
	}
	echo "<center>";
}