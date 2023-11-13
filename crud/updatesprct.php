<?php 

include "configprct.php";

    if (isset($_POST['update'])) {

        $name = $_POST['name'];

        $user_id = $_POST['user_id'];

        $password = $_POST['password'];

        $sql = "UPDATE krishna SET name='$name',password='$password' WHERE id='$user_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `krishna` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $name = $row['name'];

            $password  = $row['password'];

            $id = $row['id'];

        } 

    ?>

        <h2>User Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Personal information:</legend>

            Your name:<br>

            <input type="text" name="name" value="<?php echo $name; ?>">

            <input type="hidden" name="user_id" value="<?php echo $id; ?>">

            <br>

            Password:<br>

            <input type="password" name="password" value="<?php echo $password; ?>">

            <br>

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: viewprct.php');

    } 

}

?> 