<?php
include 'connection.php';
session_start();
if (isset($_POST['upload'])) {

    $id3 = $_GET['id'];

    $targetvid = "Uploads/Videos/" . basename($_FILES['video']['name']);
    $target = "Uploads/Thumbnail/" . basename($_FILES['thumbnail']['name']);
    $thumbnail2Target = "Uploads/Thumbnail/" . basename($_FILES['thumbnail2']['name']);
    $target2 = "Uploads/Background_image/" . basename($_FILES['background_image']['name']);
    $MovieTitle = strtolower($_POST['MovieTitle']);
    $Year = $_POST['Year'];
    $Duration = $_POST['Duration'];
    $descrtiption = $_POST['descrtiption'];
    $background_image = $_FILES['background_image']['name'];
    $thumbnail = $_FILES['thumbnail']['name'];
    $thumbnail2 = $_FILES['thumbnail2']['name'];
    $video = $_FILES['video']['name'];
    $type_m = $_POST['Videotype'];
    $Category = $_POST['options'];
    $type_movies = implode(", ", $type_m);
    $rating = $_POST['rating'];
    $sql = "UPDATE documentory_detail SET title='$MovieTitle', desciption='$descrtiption', rating='$rating', Category='$Category', type='$type_movies', duration='$Duration', year='$Year', background_image='$background_image',thumnail='$thumbnail',thumbnail2='$thumbnail2',video='$video' WHERE id='$id3'";

    mysqli_query($connn, $sql) or die(mysqli_error($connn));

    if (move_uploaded_file($_FILES['thumbnail']['tmp_name'], $target) && move_uploaded_file($_FILES['thumbnail2']['tmp_name'], $thumbnail2Target) && move_uploaded_file($_FILES['video']['tmp_name'], $targetvid) && move_uploaded_file($_FILES['background_image']['tmp_name'], $target2)) {
        header("Location:Documentory_detail.php");
    } else {
        echo "error uploading";
    }
}
