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


$user_char = "";
if (isset($_SESSION["username"])) {
    $user_data = $_SESSION["username"];
    $user_char = $user_data;
}

$user_id = "";
if (!empty($user_char)) {
    $query1 = "SELECT * FROM user WHERE username ='" . mysqli_real_escape_string($conn, $user_char) . "'";
    $result1 = mysqli_query($conn, $query1);
    if ($result1) {
        $row1 = mysqli_fetch_assoc($result1);
        $user_id = $row1['id'];
    } else {
        // Handle database error
        die("Database error: " . mysqli_error($conn));
    }
}

if (!empty($user_id) && !empty($_GET['id'])) {
    $item_id = mysqli_real_escape_string($conn, $_GET['id']);
    $check_duplicate_query = "SELECT * FROM watch_later WHERE Userid = $user_id AND Documentoryid = $item_id";
    $check_duplicate_result = mysqli_query($conn, $check_duplicate_query);
    if (mysqli_num_rows($check_duplicate_result) > 0) {
        // Record already exists, show alert
        echo "<script>alert('This item is already in your watch later list.')</script>";
        echo "<script>window.history.back()</script>";
    } else {
        $save = "INSERT INTO watch_later(Userid, Documentoryid, Status) VALUES ($user_id, $item_id, 'saved')";
        if (mysqli_query($conn, $save)) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } else {
            // Handle database error
            die("Database error: " . mysqli_error($conn));
        }
    }
}
?>
