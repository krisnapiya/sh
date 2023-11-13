<!DOCTYPE html>
<html>
<head>
	<title>Dishes</title>
</head>
<body>
<center>
    <p>Your Dishes </p>
    <form method="post" action="">
    <p>
      <select name="dis">
        <option value="dalkichadi">dalkichadi</option>
        <option value="rice">rice</option>
        <option value="paneertikka">paneertikka</option>
        <option value="pulav">pulav</option>

      </select>
    </p>
    <p><input type="submit" name="items" value="Submit">
</form>
 </center>
</body>
</html>
<?php 

if(isset($_POST['items']))
{
	$dishes=$_POST['dis'];
	if($dishes=="dalkichadi")
	{
	echo "<center>";
	echo "<b><font color=green>My Favorite dish is ".$dishes;
	echo "<br>";
	echo "The  rate is 200/";
	echo "</font></b></center>";
}
if($dishes=="rice")
	{
	echo "<center>";
	echo "<b><font color=green>My Favorite dish is ".$dishes;
	echo "<br>";
	echo "The  rate is 150/";
	echo "</font></b></center>";
}
if($dishes=="paneertikka")
	{
	echo "<center>";
	echo "<b><font color=green>My Favorite dish is ".$dishes;
	echo "<br>";
	echo "The  rate is 450/";
	echo "</font></b></center>";
}
if($dishes=="pulav")
	{
	echo "<center>";
	echo "<b><font color=green>My Favorite dish is ".$dishes;
	echo "<br>";
	echo "The  rate is 400/";
	echo "</font></b></center>";
}
}

?>