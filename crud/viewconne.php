<?php

include"conne.php";

$result="Select * FROM job";

$sql=$conn->query($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
		<td>Name</td></tr>
		<tr><td>Place</td></tr>
		<tr><td>Address</td>
	</tr>


<?php

if($result->num_rows>0){

	while($row=$result->fetch_assoc()){
		?>

		<tr>
			<td><?php echo $row['id']; ?></td><br>
			<td><?php echo $row['name']; ?></td><br>
			<td><?php echo $row['place']; ?></td><br>
			<td><?php echo $row['address']; ?></td><br>
			<input type="update" name="update">
		</tr>
		<?php
	}
}
?>
</table>
</body>
</html>
