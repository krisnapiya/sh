<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <div class="row">
    <div class="col-sm-6">
     <?php

     if(isset($_POST['submit'])){
       
       session_start();
       $qty=$_POST['qty'];
       
   }
   
   
   session_destroy(); 
   ?>             
</body>
</html>