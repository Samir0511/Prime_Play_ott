<?php
include 'connection.php';
$error = "Add Image And Movie Name";

if (isset($_POST['slideshow1'])) {

    $target1 = "Uploads/Thumbnail/" . basename($_FILES['slideshow1']['name']);

    $slidethumbnail1 = $_FILES['slideshow1']['name'];
    $movie_id = $_POST['movie_select'];


    if ($movie_id == 0 || $slidethumbnail1 == null) {

        echo "<script type='text/javascript'>";
        echo "alert('$error');";
        echo " window.location = 'Homepage.php';";

        echo "</script>";

    } else {

        $sql1 = "UPDATE  slideshow_thumbnail SET thumbnail_sli='$slidethumbnail1',movie_id='$movie_id' WHERE id=1;";

        mysqli_query($connn, $sql1) or die("data not inserted");

    }






    if (move_uploaded_file($_FILES['slideshow1']['tmp_name'], $target1)) {
        header("Location:Homepage.php");
    }

}


if (isset($_POST['slideshow2'])) {

    $target2 = "Uploads/Thumbnail/" . basename($_FILES['slideshow2']['name']);

    $slidethumbnail2 = $_FILES['slideshow2']['name'];

    $movie_id = $_POST['movie_select'];

    if ($movie_id == 0 || $slidethumbnail2 == null) {

        echo "<script type='text/javascript'>";
        echo "alert('$error');";
        echo " window.location = 'Homepage.php';";

        echo "</script>";

    } else {
    $sql2 = "UPDATE  slideshow_thumbnail SET thumbnail_sli='$slidethumbnail2',movie_id='$movie_id' WHERE id=2;";

    mysqli_query($connn, $sql2) or die("data not inserted");

    }



    if (move_uploaded_file($_FILES['slideshow2']['tmp_name'], $target2)) {
        header("Location:Homepage.php");
    } 
}


if (isset($_POST['slideshow3'])) {

    $target3 = "Uploads/Thumbnail/" . basename($_FILES['slideshow3']['name']);

    $slidethumbnail3 = $_FILES['slideshow3']['name'];
    $movie_id = $_POST['movie_select'];


    if ($movie_id == 0 || $slidethumbnail3 == null) {

        echo "<script type='text/javascript'>";
        echo "alert('$error');";
        echo " window.location = 'Homepage.php';";

        echo "</script>";

    } else {
    $sql3 = "UPDATE  slideshow_thumbnail SET thumbnail_sli='$slidethumbnail3',movie_id='$movie_id' WHERE id=3;";

    mysqli_query($connn, $sql3) or die("data not inserted");

    }



    if (move_uploaded_file($_FILES['slideshow3']['tmp_name'], $target3)) {
        header("Location:Homepage.php");
    } 
}


if (isset($_POST['slideshow4'])) {

    $target4 = "Uploads/Thumbnail/" . basename($_FILES['slideshow4']['name']);

    $slidethumbnail4 = $_FILES['slideshow4']['name'];

    $movie_id = $_POST['movie_select'];

    if ($movie_id == 0 || $slidethumbnail4 == null) {

        echo "<script type='text/javascript'>";
        echo "alert('$error');";
        echo " window.location = 'Homepage.php';";

        echo "</script>";

    } else {
    $sql4 = "UPDATE  slideshow_thumbnail SET thumbnail_sli='$slidethumbnail4',movie_id='$movie_id' WHERE id=4;";

    mysqli_query($connn, $sql4) or die("data not inserted");

    }



    if (move_uploaded_file($_FILES['slideshow4']['tmp_name'], $target4)) {
        header("Location:Homepage.php");
    } 

}


if (isset($_POST['slideshow5'])) {

    $target5 = "Uploads/Thumbnail/" . basename($_FILES['slideshow5']['name']);

    $slidethumbnail5 = $_FILES['slideshow5']['name'];

    $movie_id = $_POST['movie_select'];
    if ($movie_id == 0 || $slidethumbnail5 == null) {

        echo "<script type='text/javascript'>";
        echo "alert('$error');";
        echo " window.location = 'Homepage.php';";

        echo "</script>";

    } else {

    $sql5 = "UPDATE  slideshow_thumbnail SET thumbnail_sli='$slidethumbnail5',movie_id='$movie_id' WHERE id=5;";

    mysqli_query($connn, $sql5) or die("data not inserted");

    }



    if (move_uploaded_file($_FILES['slideshow5']['tmp_name'], $target5)) {
        header("Location:Homepage.php");
    } 

}


if (isset($_POST['slideshow6'])) {

    $target6 = "Uploads/Thumbnail/" . basename($_FILES['slideshow6']['name']);

    $slidethumbnail6 = $_FILES['slideshow6']['name'];

    $movie_id = $_POST['movie_select'];

    if ($movie_id == 0 || $slidethumbnail6 == null) {

        echo "<script type='text/javascript'>";
        echo "alert('$error');";
        echo " window.location = 'Homepage.php';";

        echo "</script>";

    } else {
    $sql6 = "UPDATE  slideshow_thumbnail SET thumbnail_sli='$slidethumbnail6',movie_id='$movie_id' WHERE id=6;";

    mysqli_query($connn, $sql6) or die("data not inserted");
    }




    if (move_uploaded_file($_FILES['slideshow6']['tmp_name'], $target6)) {
        header("Location:Homepage.php");
    } 
}


if (isset($_POST['slideshow7'])) {

    $target7 = "Uploads/Thumbnail/" . basename($_FILES['slideshow7']['name']);

    $slidethumbnail7 = $_FILES['slideshow7']['name'];

    $movie_id = $_POST['movie_select'];
    if ($movie_id == 0 || $slidethumbnail7 == null) {

        echo "<script type='text/javascript'>";
        echo "alert('$error');";
        echo " window.location = 'Homepage.php';";

        echo "</script>";

    } else {

    $sql7 = "UPDATE  slideshow_thumbnail SET thumbnail_sli='$slidethumbnail7',movie_id='$movie_id' WHERE id=7;";

    mysqli_query($connn, $sql7) or die("data not inserted");

    }



    if (move_uploaded_file($_FILES['slideshow7']['tmp_name'], $target7)) {
        header("Location:Homepage.php");
    } 

}


if (isset($_POST['slideshow8'])) {

    $target8 = "Uploads/Thumbnail/" . basename($_FILES['slideshow8']['name']);

    $slidethumbnail8 = $_FILES['slideshow8']['name'];

    $movie_id = $_POST['movie_select'];
    if ($movie_id == 0 || $slidethumbnail8 == null) {

        echo "<script type='text/javascript'>";
        echo "alert('$error');";
        echo " window.location = 'Homepage.php';";

        echo "</script>";

    } else {

    $sql8 = "UPDATE  slideshow_thumbnail SET thumbnail_sli='$slidethumbnail8',movie_id='$movie_id' WHERE id=8;";

    mysqli_query($connn, $sql8) or die("data not inserted");

    }



    if (move_uploaded_file($_FILES['slideshow8']['tmp_name'], $target8)) {
        header("Location:Homepage.php");
    } 

}


if (isset($_POST['slideshow9'])) {

    $target9 = "Uploads/Thumbnail/" . basename($_FILES['slideshow9']['name']);

    $slidethumbnail9 = $_FILES['slideshow9']['name'];

    $movie_id = $_POST['movie_select'];
    if ($movie_id == 0 || $slidethumbnail9 == null) {

        echo "<script type='text/javascript'>";
        echo "alert('$error');";
        echo " window.location = 'Homepage.php';";

        echo "</script>";

    } else {

    $sql9 = "UPDATE  slideshow_thumbnail SET thumbnail_sli='$slidethumbnail9',movie_id='$movie_id' WHERE id=9;";

    mysqli_query($connn, $sql9) or die("data not inserted");

    }



    if (move_uploaded_file($_FILES['slideshow9']['tmp_name'], $target9)) {
        header("Location:Homepage.php");
    } 

}


if (isset($_POST['slideshow10'])) {

    $target10 = "Uploads/Thumbnail/" . basename($_FILES['slideshow10']['name']);

    $slidethumbnail10 = $_FILES['slideshow10']['name'];

    $movie_id = $_POST['movie_select'];

    if ($movie_id == 0 || $slidethumbnail10 == null) {

        echo "<script type='text/javascript'>";
        echo "alert('$error');";
        echo " window.location = 'Homepage.php';";

        echo "</script>";

    } else {
    $sql10 = "UPDATE  slideshow_thumbnail SET thumbnail_sli='$slidethumbnail10',movie_id='$movie_id' WHERE id=10;";

    mysqli_query($connn, $sql10) or die("data not inserted");

    }



    if (move_uploaded_file($_FILES['slideshow10']['tmp_name'], $target10)) {
        header("Location:Homepage.php");
    } 

}