<?php
include("connection.php");

if(isset($_POST['submit']))
{
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./image/" . $filename;

	$companyname = $_POST['name'];
	$amount = $_POST['amount'];
	$quantity = $_POST['quantity'];
	

	$sql = "INSERT INTO dressess(name, amount, quantity,image) VALUES('$companyname', '$amount', '$quantity','$filename')";

	$result = $conn->query($sql);

	if($result == TRUE)
	{
		echo "New record created successfully.";
	}else
	{
		echo "Error:". $sql . "<br>". $conn->error;
	}
	$conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div id="content">
<form action="" method="POST"  enctype="multipart/form-data">
	<center>
	<div class="form-group">
		<h2>Dress Details:</h2>
          <br><br>
		Company Name:
	</div>
	<div class="form-group">
		<input type="text" name="name">
		<br>
		Amount:
	</div>
	<div class="form-group">
        <input type="number" name="amount">
		<br>
		Quantity:
	</div>
	<div class="form-group">
		<input type="number" name="quantity">
		<br><br>
		Image:
		<input class="form-control" type="file" name="uploadfile" value=""><br>
         <br>
		<br><br></div>
		<div class="form-group">
		<input type="submit" class="btn btn-primary" type="submit" name="submit">
	</div>
  </center>
</form>

</body>
</html>