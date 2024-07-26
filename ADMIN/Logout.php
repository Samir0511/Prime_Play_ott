<?php

session_start();


session_destroy();
header("Location:../FRONTED/index.php");
if (isset($_SESSION["admin"])) {
    $user_data = $_SESSION["admin"];
    $user_char = $user_data;
  }
  else{
    header('Location:../FRONTED/index.php');
  }

?>