<?php

include 'config.php';
include 'connection.php';
session_start();

?>


<!DOCTYPE html>
<html>

<head>
  <title>Card Effect</title>
  <link rel="stylesheet" href="ALL_Video.css?v=<?= $version ?>">
  <link rel="stylesheet" href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web/css/all.min.css?v=<? $version ?>">
  <link rel="stylesheet" href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web/css/all.css?v=<? $version ?>">
  <link rel="stylesheet" href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web/js/all.js?v=<? $version ?>">
  <link rel="stylesheet" href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web/js/all.min.js?v=<? $version ?>">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"rel="stylesheet">



  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css?v=<?= $version ?>" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css?v=<?= $version ?>">

  <link rel="stylesheet" href="assets/css/templatemo-finance-business.css?v=<?= $version ?>">
  <link rel="stylesheet" href="assets/css/owl.css?v=<?= $version ?>">
  <link rel="stylesheet" href="popup.css?v=<?= $version ?>">
  <style>
    /* Button used to open the contact form - fixed at the bottom of the page */


    /* The popup form - hidden by default */
    .form-popup {
      display: none;
      position: fixed;

      top: 30%;
      left: 40%;
      width: auto;
      height: auto;
      border-radius: 15px;
    }

    /* Add styles to the form container */
    .form-container {
      position: absolute;
      background-color: transparent;
    }

    .errortext{
color: white;
      font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
  </style>
</head>

<body>



  <?php include("header.php");


  ?>

  <div class="container_Main">
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $Search = $_POST['Search'];
      echo "<h1 class='errortext'>The input text is: " . $Search."</h1>";
    }
    ?>






    <?php $sql14 = "SELECT * FROM documentory_detail where title like '%$Search%'";
    $resultimg = mysqli_query($conn, $sql14);

    if (mysqli_num_rows($resultimg) > 0) {
      while ($rowimg = mysqli_fetch_assoc($resultimg)) {

        $time_string = $rowimg['duration'];
        $minutes = date('i', strtotime($time_string));



        echo '      <div class="card_Outer">';
        echo '      <div class="face_ face1_">';
        echo '      <div class="content_of_box">';


        echo "            <div class='save_later'>  <a name='save_later'  href='savelater.php?id={$rowimg['id']}'><i class='fa-regular fa-bookmark fa-2x'></i></a></div>";

        echo "   <img src='Responsive Sidebar menu/Responsive Sidebar menu/Uploads/Thumbnail/" . $rowimg['thumnail'] . "' alt='Image Not Found' >";




        echo "  </div>";
        echo "  </div>";
        echo '      <div class="face_ face2_">';
        echo '      <div class="content_of_box">';
        echo '      <p> Name: ' . $rowimg['title'] . '';
        echo '      </p>';
        echo '      <p> Rating:' . $rowimg['rating'] . '</p>';
        echo '    <p> Topic:' . $rowimg['type'] . '</p>';
        echo '  
                <p> Duration:' . $minutes . 'Min</p> ';
        echo "   <a href='play_video.php?id={$rowimg['id']}' type='button'>Play Now</a>";

        echo '      </div>';
        echo '      </div>';
        echo '      </div>';
      }
    } else {
      echo "<h1 class='errortext'>Video Not Found: </h1>";

    }










    ?>



  </div>



  <?php include("footer.php"); ?>

</body>

</html>