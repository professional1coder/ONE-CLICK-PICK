<?php 
require("conf.php");

   session_start();
  if (isset($_POST['submit'])) {

    $username = $_POST['username'];

    $email = $_POST['email'];

    $password = $_POST['password'];


    $sql = "INSERT INTO `user`  VALUES ('','$username','$email','$password',current_timestamp())";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      header("Location:./login.php");
      echo "<script>alert('Register successfully')</script>";


    }else{

      echo "<script>alert('Register failed please  re-enter the valid details')</script>";

    } 

    $conn->close(); 

  }

?>