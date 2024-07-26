<?php

include 'config.php';

?>



<html>

<head>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">



  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css?v=<?= $version ?>" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css?v=<?= $version ?>">
  <link rel="stylesheet" href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web/css/all.min.css?v=<? $version ?>">
  <link rel="stylesheet" href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web/css/all.css?v=<? $version ?>">
  <link rel="stylesheet" href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web/js/all.js?v=<? $version ?>">
  <link rel="stylesheet" href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web/js/all.min.js?v=<? $version ?>">
  <link rel="stylesheet" href="assets/css/templatemo-finance-business.css?v=<?= $version ?>">
  <link rel="stylesheet" href="assets/css/owl.css?v=<?= $version ?>">

</head>


<body>






  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-xs-12">
          <ul class="left-info">
            <li><a href="#"><i class="fa fa-clock-o"></i>Mon-Fri 09:00-17:00</a></li>
            <li><a href="#"><i class="fa fa-phone"></i>090-080-0760</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="right-icons">
            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
           
          </ul>
        </div>
      </div>
    </div>
  </div>


  <header class="sticky-top">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <h2>MoviesFLX</h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">

              <div class="search">
                <input type="text" class="input" placeholder="Search...">
                <button class="btn">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Document_page.php">Doumentories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ALL_Video.php">All Video</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About_page.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Admin</a>
            </li>
            <li class="nav-item">
           
            <div class="profile_image">
            <img src="wp2082809.jpg" class="profile_image1" width="35px" height="35px" alt="imagenotfound">    
           
          </div>
         
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/accordions.js"></script>
<script>
    let list = document.querySelectorAll(".nav-item");
function activelink(){
  list.forEach((item) =>
  
item.classList.remove('active'));
this.classList.add('active');


}

list.forEach((item) =>
item.addEventListener('click',activelink))

  </script>
  <script src="app.js"></script>
</body>

</html>