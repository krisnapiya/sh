<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div id="content">
  <form name="frm" method="POST" action="" enctype="multipart/form-data">
  	<div class="form-group">
  		Product Name <input class="form-control" name="name" type="text">
</div>

<div class="form-group">
	upload image<input class="form-control" name="uploadfile" type="file">
</div>

<div class="form-group">
	<button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
</div>
</form>
</div>

</body>


<?php

$msg="";

//if upload button is clicked..

if(isset($_POST['upload']))
{
	$filename= $_FILES["uploadfile"]["name"];
	$tempname= $_FILES["uploadfile"]["tmp_name"];
	$folder="./img/" . $filename;

	$name=$_POST['name'];
	$db=mysqli_connect("localhost","root","","picture");

	//get all the submitted data from the form
	$sql= "INSERT INTO pic(name,img) VALUES ('$name','$filename')";

	//execute query
	mysqli_query($db, $sql);

	//now lets move the uploaded image into the folder: image

	if(move_uploaded_file($tempname, $folder)) {
		echo "<h3> image uploaded sucessfully</h3>";
	}else{
		echo "<h3> failed to upload image</h3>";
	}
}
?>