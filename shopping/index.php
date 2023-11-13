<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body class="container-fluid">
  <nav class="navbar bg-light fixed-top shadow">
    <div class="container-fluid mx-5">
      <a class="navbar-brand">PRANA</a>

      <form class="d-flex" role="search">

        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">

      </form>
    </div>
  </nav>

  <div class="container-fluid my-5 py-5">
<p align="center"><strong>Products For You</strong></p>
 </div>
<?php
include"conn.php";

$sql="SELECT * from kids";
$result=$conn->query($sql);
?>

<div class="container-fluid">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body"></div>
			<?php
           if($result->num_rows>0)
           {
           	while($row=$result->fetch_assoc())
           	{
           		?>
               <div class="card-body">
              <img src="<?php echo $row['image'];?>" width=150 height=100></div>
               <div class="card-header">
           			<?php echo $row['id'];?> <?php echo $row['name'];?> <br>
                $<?php echo $row['amount'];?> <?php echo $row['discount'];?>% <br><br>
                <div class="card-footer">
           			
                <form action="cart.php" method="post">
                Type quantity<input type="text" name="qty"><br><br>
                <input type="submit" value="Add to cart"></a><br>
              </form>
           			</div></div>
                
           		<?php
           	}
           }
         
			?>


</div></div>

     
</body>
</html>