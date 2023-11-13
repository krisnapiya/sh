<?php
include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

$sql = "SELECT name,amount,quantity,image FROM dressess ORDER BY id ASC";
$result = $conn->query($sql);
if($result->num_rows >0)
			{
				while($row = $result->fetch_assoc())
				{
					?>
					<div class="container-fluid">
					<div class="row">
					<div class="col-sm-3">
						 <?php echo $row['name']; ?>
					 </div>
					 <div class="col-sm-3">
                   INR &nbsp<?php echo $row['amount']; ?>
                     </div>
                       <div class="col-sm-3">     
					Qty:<?php echo $row['quantity']; ?>
					  </div>
					     <div class="col-sm-3">    
					     	<img src= <?php echo $row['image']; ?> alt=noimage class="img-fluid" style="width: 200px; height: 200px;"> 
				     </div>
				     <p> Delivery Address:<input type="text" name="address"></p>
	                 <p>Quantity:<input type="number" name="qty"></p>
				     <form action=" " method="POST">
	<input type="submit" name="submit" value="Total" class="btn">

	
</form><br>
				<?php
				}
			}

			(isset($_POST['total']))
			{
				
	$a=$_POST['qty'];
	$b=$_POST['amount'];

	$c=$a*$b;

	echo "<center>";
		echo "value of a=" .$a. "<br>";
		echo "value of b=" .$b. "<br>";
		echo "Total sum is ".$c."<br>";
}
            
?>

</div>
</body>
</html>