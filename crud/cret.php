<?php 

include "conf.php";

  if (isset($_POST['submit'])) {

    $name = $_POST['name'];

    $age = $_POST['age'];

    $gender = $_POST['gender'];

    $sql = "INSERT INTO vote(`name`, `age`, `gender`) VALUES ('$name','$age','$gender')";

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

    Name:<br>

    <input type="text" name="name">

    <br>

    Age:<br>

    <input type="text" name="age">

    <br>

    Gender:<br>

    <input type="radio" name="gender" value="Male">Male

    <input type="radio" name="gender" value="Female">Female

    <br><br>

    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>

</body>

</html>