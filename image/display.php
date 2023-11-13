<?php

$db=mysqli_connect("localhost","root","","picture");

$query="SELECT * FROM pic ";
$result=mysqli_query($db,$query);

echo "<center><table border='1' width='100%'> ";

while($data=mysqli_fetch_assoc($result))
{
	echo "<tr>";
     
	echo "<td>" . $data['id']."</td>";
	echo "<td>" . $data['name']. "</td>";
	?>

	<td>image<img src="./img/<?php echo $data['img']; ?>" width="200" height="200"></td>

	<?php
	echo "</tr>";

}
echo "</table></center>";
?>