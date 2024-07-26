<?php
// Connect to the database
include '../FRONTED../connection.php';
session_start();

// Check the credentials against the database


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $password = $_POST["password"];
  $confirm_password = $_POST["confirm_password"];
  $name = $_POST['name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $gender = $_POST["gender"];

  $messageformob = "Characters Not Allows And you Must Add 10 Digits";
  $messageforemail = "this Email ID already Exist Add Other one ";
  $messageforusername = "Error: The username must contain an @ symbol.";
  $messageforusername2 = "Error: This Username Is already Exist.";
  $messageforpassword = "Password and Confirm password is not matched";
$createduser="Now You Can Login:)";
  $error = false;

  if (strpos($username, "@") === false) {
    $error = true;
    echo "<script type='text/javascript'>";
    echo "alert('$messageforusername');";
    echo "</script>";
  } else {
    $check_duplicate = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");
    if (mysqli_num_rows($check_duplicate) > 0) {
      $error = true;
      echo "<script type='text/javascript'>";
      echo "alert('$messageforusername2');";
      echo "</script>";
    }
  }

  if (preg_match("[0-9]", $mobile) || strlen($mobile) != 10) {
    $error = true;
    echo "<script type='text/javascript'>";
    echo "alert('$messageformob');";
    echo "</script>";
  }

  $check_duplicate = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'");
  if (mysqli_num_rows($check_duplicate) > 0) {
    $error = true;
    echo "<script type='text/javascript'>";
    echo "alert('$messageforemail');";
    echo "</script>";
  }

  if ($password != $confirm_password) {
    $error = true;
    echo "<script type='text/javascript'>";
    echo "alert('$messageforpassword');";
    echo "</script>";
  }

  if (!$error) {
    $gender_char = substr($gender, 0, 1);
    $query = "INSERT INTO user (name,username,email,mobile,gender,password) VALUES ('$name','$username','$email','$mobile','$gender_char','$password')";
    if ($conn->query($query) === TRUE) {
      header("Location:sign-up-login.php");
    } else {
      echo "connection failed";
      
    }
  }
 else
 {

  echo "<script type='text/javascript'>";
  echo " window.location = 'sign-up-login.php';";


  echo "</script>";

 }
}
?>