<?php 

include "configprct.php";

  if (isset($_POST['submit'])) {

    $name = $_POST['name'];

    $password = $_POST['password'];


    $sql = "INSERT INTO krishna(name, password) VALUES ('$name','$password')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>

<!DOCTYPE html>

<html>

<body>

<h2>Signup Form</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Personal information:</legend>

    Your name:<br>

    <input type="text" name="name">

    <br>

    Password:<br>

    <input type="password" name="password">

    <br>
    <br>

    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>

</body>

</html>