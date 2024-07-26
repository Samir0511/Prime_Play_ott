<?php

include("configration.php");
include("connection.php");
session_start();



$id=$_GET['id'];

$sql="DELETE FROM message WHERE id=$id";
if($connn->query($sql)==true){

    header("location:message.php");

}else{
    echo "delete failer";
}


?>