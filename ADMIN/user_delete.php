<?php

include("configration.php");
include("connection.php");
session_start();
if (isset($_SESSION["admin"])) {
    $user_data = $_SESSION["admin"];
    $user_char = $user_data;
  }
  else{
    header('Location:../FRONTED/index.php');
  }
?>

<?php


$id=$_GET['id'];

$sql="DELETE FROM `user` WHERE id=$id";
if($connn->query($sql)===true){

    header("location:User_details.php");

}else{
    echo "delete failrd";
}


?>