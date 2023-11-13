<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
	<fieldset>
		<legend>Details</legend><br>
		Name:<br><input type="text" name="name"><br><br>
		Address:<br><input type="text" name="add"><br><br>
		hospital:<br><input type="file" name="hospital"><br><br>
		<input type="submit" name="submit">
	</fieldset>
</form>

<div class="container">
	<div class="d-flex justify-content-center align-items-center" style="height: 100vh">
		<div class="text-center">
			<i
  class="fas fa-car-side fa-3x"
  data-mdb-toggle="animation"
  data-mdb-animation="slide-in-left"
  data-mdb-animation-start="onScroll"
></i>
		</div>
	</div>
	</div>
</body>
</html>
<?php

include"conn.php";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_FILES["hospital"]))
	{
		echo "called";
	    $filename = $_FILES["hospital"]["name"];
	    // $tempname = $_FILES["uploadfile"]["tmp_name"];
	    $folder = "./hospital/" . $filename;
	}

	if(isset($_POST['name']))
	{
		$name = $_POST['name'];
	}

	if (isset($_POST['address'])) {
		$add = $_POST['add'];
	}


	$sql = "INSERT INTO service(name, address,hospital) VALUES('$name', '$add','$filename')";

	$result = $conn->query($sql);

	if($result == TRUE)
	{
		
	}else
	{
		echo "Error:". $sql . "<br>". $conn->error;
	}
	$conn->close();
}
?>