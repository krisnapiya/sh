<?php 

include "configprct.php"; 

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "DELETE FROM `krishna` WHERE `id`='$user_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";
        header('location:viewprct.php');

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>

