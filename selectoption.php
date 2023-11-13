<!DOCTYPE html>
<html>
<head>
	<title>subject</title>
</head>
<body>
 <center>
    <p>Your Fav Subject</p>
    <form method="post" action="">
    <p>
      <select name="opt">
        <option value="java">java</option>
        <option value="php">php</option>
        <option value="html">html</option>
        <option value="javascript">javascript</option>

      </select>
    </p>
    <p><input type="submit" name="sub" value="Submit">
</form>
 </center>
</body>
</html>

<?php 

if(isset($_POST['sub']))
{
	$option=$_POST['opt'];
	echo "<center>";
	echo "<b><font color=blue>My Favorite subject is ".$option;
	echo "</font></b></center>";
}

?>