<?php
include 'connection.php';
$error="Add Image ANd Movie Name";
if (isset($_POST['slide1'])) {

    $target1 = "Uploads/Thumbnail/" . basename($_FILES['slider01']['name']);

$Movie_id=$_POST['movie_select'];
    $slide1 = $_FILES['slider01']['name'];

if($Movie_id==0 || $slide1==null)
{

     echo "<script type='text/javascript'>";
    echo "alert('$error');";
  echo " window.location = 'Homepage.php';";

    echo "</script>";

}
else
{
    $sql1 = ("UPDATE  slider_thumbnail SET thubnail='$slide1',slider_id='$Movie_id' WHERE id='1'");
    mysqli_query($connn, $sql1) or die("data not inserted");

}
    if (move_uploaded_file($_FILES['slider01']['tmp_name'], $target1)) {
        header("Location:Homepage.php");
    }





   

}

if (isset($_POST['slide2'])) {

    $target2 = "Uploads/Thumbnail/" . basename($_FILES['slider02']['name']);

    $Movie_id=$_POST['movie_select'];

    $slide2 = $_FILES['slider02']['name'];


   

    if($Movie_id==0 || $slide2==null)
    {
    
         echo "<script type='text/javascript'>";
        echo "alert('$error');";
      echo " window.location = 'Homepage.php';";
    
        echo "</script>";
    
    }
else {
    $sql2 = "UPDATE  slider_thumbnail SET thubnail='$slide2',slider_id='$Movie_id' WHERE id=2;";

    mysqli_query($connn, $sql2)or die("data not inserted");
}

    if (move_uploaded_file($_FILES['slider02']['tmp_name'], $target2)) {
        header("Location:Homepage.php");
    } 

}
if (isset($_POST['slide3'])) {

    $target3 = "Uploads/Thumbnail/" . basename($_FILES['slider03']['name']);

    $Movie_id=$_POST['movie_select'];

    $slide3 = $_FILES['slider03']['name'];
    if($Movie_id==0 || $slide3==null)
    {
    
         echo "<script type='text/javascript'>";
        echo "alert('$error');";
      echo " window.location = 'Homepage.php';";
    
        echo "</script>";
    
    }else
    {

        $sql3 = "UPDATE  slider_thumbnail SET thubnail='$slide3',slider_id='$Movie_id' WHERE id=3;";

        mysqli_query($connn, $sql3)or die("data not inserted");
    
    

    }




    if (move_uploaded_file($_FILES['slider03']['tmp_name'], $target3)) {
        header("Location:Homepage.php");
    } 

}
if (isset($_POST['slide4'])) {

    $target4 = "Uploads/Thumbnail/" . basename($_FILES['slider04']['name']);

    $Movie_id=$_POST['movie_select'];

    $slide4 = $_FILES['slider04']['name'];

    if($Movie_id==0 || $slide4==null)
    {
    
         echo "<script type='text/javascript'>";
        echo "alert('$error');";
      echo " window.location = 'Homepage.php';";
    
        echo "</script>";
    
    }
    else
    {
        $sql4 = "UPDATE  slider_thumbnail SET thubnail='$slide4',slider_id='$Movie_id' WHERE id=7;";

        mysqli_query($connn, $sql4)or die("data not inserted");
    
    
    
    }



    if (move_uploaded_file($_FILES['slider04']['tmp_name'], $target4)) {
        header("Location:Homepage.php");
    }

}
if (isset($_POST['slide5'])) {

    $target5 = "Uploads/Thumbnail/" . basename($_FILES['slider05']['name']);
    $Movie_id=$_POST['movie_select'];


    $slide5 = $_FILES['slider05']['name'];

    if($Movie_id==0 || $slide5==null)
    {
    
         echo "<script type='text/javascript'>";
        echo "alert('$error');";
      echo " window.location = 'Homepage.php';";
    
        echo "</script>";
    
    }
    else{
        $sql5 = "UPDATE  slider_thumbnail SET thubnail='$slide5',slider_id='$Movie_id' WHERE id=8;";

        mysqli_query($connn, $sql5)or die("data not inserted");
    
    
    }




    if (move_uploaded_file($_FILES['slider05']['tmp_name'], $target5)) {
        header("Location:Homepage.php");
    } 

}
