<?php

include"conn.php";

$sql="SELECT * from student";
$result=$conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
	<?php echo"<br><a href='create.php'> create new records</a>"?>

	<h2>Table</h2>

	<table class="table">
		<thead>
				<tr>
					<td>ID</td>
					<td>Name</td>
					<td>rollno</td>
					<td>division</td>
				</tr>
		</thead>
         <tbody>
		<?php

		if($result->num_rows>0)
		{
			while($row=$result->fetch_assoc())
			{
				?>
				<tr>
					<td><?php echo$row['id']; ?></td>
					<td><?php echo$row['name']; ?></td>
					<td><?php echo $row['roll_no']; ?></td>
					<td><?php echo $row['division']; ?></td>

					<td><a href="update.php">
						id=<?php echo$row['id'];  ?> &nbsp Edit</a>&nbsp;
						<a href="delete.php">&nbsp
							id=<?php echo $row['id'];  ?>delete</a>
					</td>
				</tr>
				<?php
			}
		}
		?>
</div>
</body>
</html>