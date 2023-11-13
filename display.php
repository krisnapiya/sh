<?php
$con=mysqli_connect('localhost','root','','priya');
if(mysqli_connect_errno())
{
	echo "Failed to connect to mysql: " . mysqli_connect_error();
}

$result=mysqli_query($con, "SELECT * FROM student");

echo "<center><h1>Show Records </h1> <hr color=red><table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Address</th>
<th>Fee</th>
</tr>";

while($row= mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>" . $row['id'] . "</td>";
	echo "<td>" . $row['name'] . "</td>";
	echo "<td>" . $row['address'] . "</td>";
	echo "<td>" . $row['fee'] . "</td>";
}

echo "</table></center>";

mysqli_close($con);

?>