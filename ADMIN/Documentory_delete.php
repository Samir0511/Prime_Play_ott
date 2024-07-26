<?php

include("configration.php");
include("connection.php");
session_start();

?>

<?php


$id=$_GET['id'];

$sql="DELETE FROM `documentory_detail` WHERE id=$id";
if($connn->query($sql)===true){

    header("location:Documentory_detail.php");

}else{
    echo "delete failrd";
}


?>