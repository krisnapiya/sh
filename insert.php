<?php
include("connprc.php");
 if(isset($_POST['submit'])){
$uname=$_POST['username'];
$pswd=$_POST['password'];
$add=$_POST['address'];
$nmbr=$_POST['number'];

$sql="INSERT INTO tablenm(username,password,address,numb)VALUES('$uname','$pswd','$add','$nmbr')";

$k = mysqli_query($conn, $sql);
if($k==TRUE)
{
	header('location:dash.html'); //echo" data added suceesfuly";
}
else{
	echo " error";
}

}