<?php
include 'connection.php';

if (isset($_POST['upload'])) {


    $targetvid = "Uploads/Videos/" . basename($_FILES['video']['name']);
    $target = "Uploads/Thumbnail/" . basename($_FILES['thumbnail']['name']);
    $targetthumbnail = "Uploads/Thumbnail/" . basename($_FILES['thumbnail2']['name']);
    $target2 = "Uploads/Background_image/" . basename($_FILES['background_image']['name']);
    $MovieTitle = strtolower($_POST['MovieTitle']);
    $Year = $_POST['Year'];
    $categorydoc = $_POST['options'];

    $Duration = $_POST['Duration'];
    $descrtiption = $_POST['descrtiption'];
    $background_image = $_FILES['background_image']['name'];
    $thumbnail = $_FILES['thumbnail']['name'];
    $thumbnailverticle = $_FILES['thumbnail2']['name'];
    $video = $_FILES['video']['name'];
    $type_m = $_POST['Videotype'];
    $type_movies = implode(", ", $type_m);
    $descrtiption22 = mysqli_real_escape_string($connn, "$descrtiption");

    $rating = $_POST['rating'];
    $sql = "INSERT INTO documentory_detail (title	, desciption, rating,Category, type, duration, year, background_image,thumnail,thumbnail2,video)
    VALUES('$MovieTitle','$descrtiption22','$rating','$categorydoc','$type_movies','$Duration','$Year','$background_image','$thumbnail','$thumbnailverticle','$video')";

$sql2="INSERT INTO movies (title)VALUES('$MovieTitle')";
    mysqli_query($connn, $sql);
    mysqli_query($connn, $sql2);
    

    if (move_uploaded_file($_FILES['thumbnail']['tmp_name'], $target) && move_uploaded_file($_FILES['video']['tmp_name'], $targetvid) &&  move_uploaded_file($_FILES['background_image']['tmp_name'], $target2) &&  move_uploaded_file($_FILES['thumbnail2']['tmp_name'], $targetthumbnail)) {
        header("Location:Documentory_upload.php");
    } else {
        echo "error uploading";
    }
}
