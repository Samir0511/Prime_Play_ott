
<?php

include 'config.php';

include 'connection.php';
session_start();
// Get the current date

$currentDate = new DateTime();
$username=$_SESSION["username"];
echo $username;

// Calculate the date for the next month




// Display the results
$conn=mysqli_connect("localhost","root","","home"); //pricing table name
$price=$_SESSION["pay_id"];
if($price==199){
    $nextMonthDate = clone $currentDate;
    $nextMonthDate->modify('+1 month');
    $new3= $nextMonthDate->format('y-m-d');
   // echo $new3."<br>";

   // $query="INSERT into payment_details(Username,Duration,P_Status)values('$username','$new3','done')";
    $query2="Update user set Status='Done',Duration = '$new3' where Username='$username'";
//mysqli_query($conn,$query);
mysqli_query($conn,$query2);
header('Location:../FRONTED/index.php');

}
else if($price==699){
    $sixmonthdate = clone $currentDate;

    //$sixmonthdate->modify('+6 month');
    $new= $sixmonthdate->format('d-m-y');
    //echo $new."<br>";
  // $query="INSERT into payment_details(Username,Duration,P_Status)values('$username','$new3','done')";
  $query2="Update user set Status='Done',Duration = '$new' where Username='$username'";
  //mysqli_query($conn,$query);
  mysqli_query($conn,$query2);
  header('Location:../FRONTED/index.php');

}
else{
    $nextyearDate = clone $currentDate;

    $nextyearDate->modify('+1 year');
    $new2= $nextyearDate->format('d-m-y');

   // $query="INSERT into payment_details(Username,Duration,P_Status)values('$username','$new3','done')";
   $query2="Update user set Status='Done',Duration = '$new2' where Username='$username'";
   //mysqli_query($conn,$query);
   mysqli_query($conn,$query2);
   header('Location:../FRONTED/index.php');

}

?>