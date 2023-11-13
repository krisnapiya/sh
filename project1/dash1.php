<?php
include("connprc.php");

if(isset($_POST['submit'])){

   
	$pdnm=$_POST['pname'];
    $prc=$_POST['price'];
	$qty=$_POST['qty'];
	$mdt=$_POST['mdt'];
	

    
    	$insert="INSERT INTO dashboard(pname,price,qty,mdate)VALUES('$pdnm','$prc','$qty','$mdt')";
    	$p = mysqli_query($conn, $insert);

    	if($p==TRUE)
    	{
    		echo "Product Add";
    		//echo "connection true";
    	}
    	{
    		echo "connection failed";
    	}
       
  }       
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<?php echo "<br><br><a href='dash.html'>  </a>"?>
	<h2>Details</h2>
	<table class="table">
		<thead>
			<tr>
				<th>Id</th>
				<th>Product Name</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Manufacturing Date</th>
				
			</tr>
		</thead>
		<tbody>
			<?php
                  $sql = "SELECT * FROM dashboard";
                  $result = $conn->query($sql);

			if($result->num_rows >0)
			{
				while($row = $result->fetch_assoc())
				{
					?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['pname']; ?></td>
					    <td><?php echo $row['price']; ?></td>
						<td><?php echo $row['qty']; ?></td>
                        <td><?php echo $row['mdate']; ?></td>
                       

                    </tr>
                    <?php
                }
			}
			?>
			</tbody></table></div>
</body>
</html>