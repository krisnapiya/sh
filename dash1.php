<?php
include("connprc.php");

if(isset($_POST['submit'])){

	$id=$_POST['id'];
	$pdnm=$_POST['pname'];
    $prc=$_POST['price'];
	$qty=$_POST['qty'];
	$mdt=$_POST['mdt'];
	$pid=$_POST['id'];

    
    	$insert="INSERT INTO dashboard(id,pname,price,qty,mdate,p_id)VALUES('id',$pdnm','$prc','$qty','$mdt','$pid')";
    	$p = mysqli_query($conn, $insert);
    
       $sql = "SELECT * FROM dashboard";
                  $result = $conn->query($sql);
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
				<th>Product Id</th>
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
						<td><?php echo $row['pname']; ?></td>
					    <td><?php echo $row['price']; ?></td>
						<td><?php echo $row['qty']; ?></td>
                        <td><?php echo $row['mdate']; ?></td>
                        <td><?php echo $row['p_id']; ?></td>

                    </tr>
                   <?php 
                }
			}
			?>
			</tbody></table></div>
</body>
</html>