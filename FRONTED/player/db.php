<?php
$comment=$_POST['comment'];

$host="localhost";
$user="root";
$password="";
$db="db";

$conn=mysqli_connect($host,$user,$password,$db);
$query="INSERT into comment(comment)values('$comment')";
mysqli_query($conn,$query);
header("location:player.html");
?>
