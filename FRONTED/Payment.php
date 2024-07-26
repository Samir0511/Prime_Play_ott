<?php

include 'config.php';

include 'connection.php';
session_start();



$sql2 = "SELECT *  FROM pricing";
$result2 = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result2) > 0) {
    // Fetch the most recent record
    $row2 = mysqli_fetch_assoc($result2);

    // Use the data in your code
} 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web/css/all.min.css?v=<? $version ?>">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web/css/all.css?v=<? $version ?>">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web/js/all.js?v=<? $version ?>">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web/js/all.min.js?v=<? $version ?>">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">


    <link rel="icon" href="logo_0005241.ico" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css?v=<?= $version ?>" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css?v=<?= $version ?>">

    <link rel="stylesheet" href="assets/css/templatemo-finance-business.css?v=<?= $version ?>">
    <link rel="stylesheet" href="assets/css/owl.css?v=<?= $version ?>">
 <style>
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Open Sans Condensed', sans-serif;
    text-decoration: none;
    list-style: none;
}

body {
    background: #30336b;
    display: flex;
    min-height: 100vh;
    align-items: center;
}

.price-table {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    width: min(1600px, 100%);
    margin: auto;
}

.price-card {
    flex: 1;
    max-width: 360px;
    background: #f1f1f1;
    margin: 20px 10px;
    text-align: center;
    overflow: hidden;
    cursor: pointer;
    transition: .2s linear;
    color: #2d2d2d;
}

.price-card-header {
    background: #0fbcf9;
    display: inline-block;
    padding: 12px 30px;
    color: #f1f1f1;
    font-size: 16px;
    border-radius: 0 0 20px 20px;
    text-transform: uppercase;
    font-weight: 600;
    transition: .4s linear;
}

.price-card:hover .price-card-header {
    box-shadow: 0 0 0 26em #0fbcf9;
}

.price {
    font-size: 70px;
    margin: 40px 0;
    color: #0fbcf9;
    transition: .2s linear;
}

.price sup,
.price span {
    font-size: 22px;
    font-weight: 700;
}

.price-card:hover,
.price-card:hover .price {
    color: #f1f1f1;
}

.price-card li {
    font-size: 16px;
    padding: 10px 0;
    text-transform: uppercase;
}

.order-btn {
    display: inline-block;
    margin-top: 80px;
    margin-bottom: 40px;
    border: 2px solid #0fbcf9;
    color: #0fbcf9;
    padding: 18px 40px;
    border-radius: 8px;
    text-transform: uppercase;
    font-weight: 500;
    transition: .3s linear;
}

.order-btn:hover {
    background: #0fbcf9;
    color: #f1f1f1;
}

@media screen and (max-width:1100px) {
    .price-card {
        flex: 50%;
    }
}

 </style>
</head>
<body>
    

  <!-- ***** Preloader Start ***** -->
  <div id="loader-overlay">
    <video id="loader-video" autoplay loop muted transparent>
      <source src="logo_2chicxulub-impact-event-.mp4" type="video/mp4">
    </video>
  </div>

<div class="price-table">
  <div class="price-card">
    <h3 class="price-card-header">Monthly</h3>
    <div class="price"><sup>₹</sup><?php  echo $row2['pricing_amount'];?><span>/1Month</span></div>
    <ul>
      <li><strong>High</strong> Quality content</li>
      <li><strong>Friendly</strong> Interface</li>
      <li><strong>Reccomendation</strong> Movies</li>
    </ul>
   <?php  echo "   <a href='payment_process.php?id={$row2['pricing_amount']}' class='order-btn' type='button'>Pay Now</a>";?>

  </div>
  
  <div class="price-card">
    <h3 class="price-card-header">Half Year</h3>
    <div class="price"><sup>₹</sup><?php  echo $row2['Price_s']?><span>/6Months</span></div>
    <ul>
      <li><strong>High</strong> Quality content</li>
      <li><strong>Friendly</strong> Interface</li>
      <li><strong>Reccomendation</strong> Movies</li>
    </ul>
    <?php  echo "   <a href='payment_process.php?id={$row2['Price_s']}' class='order-btn' type='button'>Pay Now</a>";?>
  </div>
  
  <div class="price-card">
    <h3 class="price-card-header">Annualy</h3>
    <div class="price"><sup>₹</sup><?php  echo $row2['Price_Y']?><span>/1Year</span></div>
    <ul>
      <li><strong>High</strong> Quality content</li>
      <li><strong>Friendly</strong> Interface</li>
      <li><strong>Reccomendation</strong> Movies</li>
    </ul>
    <?php  echo "   <a href='payment_process.php?id={$row2['Price_Y']}' class='order-btn' type='button'>Pay Now</a>";?>
  </div>
</div>
</body>
<script>
setTimeout(function() {
    var loaderOverlay = document.getElementById("loader-overlay");
    var video = document.getElementById("loader-video");
    var content = document.getElementById("content");
  
    // Hide the loader overlay and show the content
    loaderOverlay.style.display = "none";
    video.style.display = "none";
    content.style.display = "block";
  }, 2000);
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        var box = $('.header-text').height();
        var header = $('header').height();

        if (scroll >= box - header) {
            $("header").addClass("background-header");
        } else {
            $("header").removeClass("background-header");
        }
    });
</script>
</html>