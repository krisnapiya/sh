<?php
include "conn.php";
$sql = "SELECT * FROM service";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<?php echo "<br><br><a href='doctor.php'>Create New Records </a>"?>
	<h2>Service</h2>
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th> Name</th>
				<th>Address</th>
				<th>Hospital</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if($result->num_rows >0)
			{
				while($row = $result->fetch_assoc())
				{
					?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['hospital']; ?></td>
                    </tr>
                    <?php
                }
			}
			?>
			</tbody></table></div>
</body>
</html>