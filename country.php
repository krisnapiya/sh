<!DOCTYPE html>
<html>
<head>
	<title>Country</title>
</head>
<body>
<center>
    <p>Select Your Country </p>
    <form method="post" action="">
    <p>
      <select name="con">
        <option value="India">India</option>
        <option value="US">US</option>
        <option value="UK">UK</option>
        <option value="Japan">Japan</option>

      </select>
    </p>
    <p><input type="submit" name="country" value="Submit">
</form>
 </center>
</body>
</html>
<?php 

if(isset($_POST['country']))
{
	$contry=$_POST['con'];
	if($contry=="India")
	{
	echo "<center>";
	echo "<b><font color=green size=+2>My Country is ".$contry;
	echo "<br>";
	echo "Nature in India is a land where diversity makes its mark in every possible way. India’s geographies that define its physical existence are the major examples of this distinguishing trait. The country shows a beautiful coexistence of snow-clad trenches, warm sandy deserts, tropical beaches, lush green forests, all in one chunk of land.";
	echo "</font></b></center>";
}
if(isset($_POST['country']))
{
	$contry=$_POST['con'];
	if($contry=="US")
	{
	echo "<center>";
	echo "<b><font color=red size=+2>My Country is ".$contry;
	echo "<br>";
	echo "The United States is a federal republic with three separate branches of government, including a bicameral legislature. It is a liberal democracy and market economy; it ranks high in international measures of human rights, quality of life, income and wealth, economic competitiveness, and education; and it has low levels of perceived corruption.";
	echo "</font></b></center>";
}
}
if(isset($_POST['country']))
{
	$contry=$_POST['con'];
	if($contry=="UK")
	{
	echo "<center>";
	echo "<b><font color=blue size=+2>My Country is ".$contry;
	echo "<br>";
	echo "The United Kingdom of Great Britain and Northern Ireland, commonly known as the United Kingdom (UK) or Britain, is a sovereign country in Europe, off the north-western coast of the continental mainland. It comprises England, Wales, Scotland, and Northern Ireland.";
	echo "</font></b></center>";
}
}
if(isset($_POST['country']))
{
	$contry=$_POST['con'];
	if($contry=="Japan")
	{
	echo "<center>";
	echo "<b><font color=orange size=+2>My Country is ".$contry;
	echo "<br>";
	echo "Japan, officially the Republic of Japan, is an island country in East Asia. It has a total area of 377,915 square km. Tokyo is its capital and largest city. Japanese is its national language.";
	echo "</font></b></center>";
}
}
}
?>