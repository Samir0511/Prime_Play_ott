<?php

include 'config.php';

include 'connection.php';
session_start();
$user_data = $_SESSION["username"];
$user_char = $user_data;


if(!isset($_SESSION['username'])) {
  // Redirect to login page
  header("Location:../LOGIN/sign-up-login.php");
  exit();
}


$username = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$un="username or email is not correct";


$query = "SELECT * FROM user WHERE  email='$email' ";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {


   
    $query1 = "INSERT INTO message (username,useremail,message) VALUES ('$username','$email','$message')";
   
    if ($conn->query($query1) === TRUE) {
        header("Location:../FRONTED/index.php");
      } else {
        echo "connection failed";
        
      }
}
else {
    echo "<script type='text/javascript'>";
    echo "alert('$un');";
  echo " window.location = 'index.php';";

    echo "</script>";
}
