<?php

session_start();
// Connect to the database
include 'connection.php';


$username = $_POST["email_login"];
$password = $_POST["password_login"];

$login="username and password is not correct";


$query = "SELECT * FROM user WHERE username='$username'  AND password='$password'";
$query1 = "SELECT * FROM admin WHERE username='$username'   AND password='$password'";

$result = mysqli_query($conn, $query);
$result1 = mysqli_query($conn, $query1);



if (mysqli_num_rows($result) >0) {
  $_SESSION["username"] = $username;
  header("Location: ../FRONTED/index.php");
} elseif(mysqli_num_rows($result1) > 0){
  $_SESSION["admin"] = "admin" ;
  header("Location: ../ADMIN/Homepage.php");
}else {
    echo "<script type='text/javascript'>";
    echo "alert('$login');";
  echo " window.location = 'sign-up-login.php';";

    echo "</script>";
}
?>