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
  <style>

    ::placeholder {
  color: white;
}
input{

  color: orange;
}

    .gradient-text {
      background: linear-gradient(to right, gold, white, gold);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      text-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
      position: relative;
      font-size: 30px;
      font-weight: bold;
      font-family: 'Courier New', Courier, monospace;

    }

    h3 {
      filter: saturate(3);
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


  <!-- ***** Preloader End ***** -->

  <!-- Header -->



  <header class="sticky-top">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <h3 class="gradient-text ">
            <img src="Logo/logo_00054.png" alt="Icon Image" width="70px" height="40px">Prime Play
          </h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">

                <form action="Search.php" method="POST">
                  <input type="text" name="Search" class="input" placeholder="Search...">
                  <button class="btn">

                    <i class="fas fa-search"></i>
                  </button>
                </form>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Document_page.php">Category</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ALL_Video.php">All Video</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="payment.php">Pricing</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="about.php">About Us</a>
            </li>

            <li class="nav-item">
              <?php
              if (isset($_SESSION["username"])) {
                $user_data = $_SESSION["username"];
                $user_char = $user_data;

                echo "<a href='Profile.php' class='nav-link' style='cursor:pointer'>Profile </a>";



                // Do something with $user_data
              } elseif (isset($_SESSION["admin"])) {
                $user_data = $_SESSION["admin"];
                $user_char = $user_data;
                echo "<a href='../ADMIN/Homepage.php' class='nav-link' style='cursor:pointer'><i> <b>Profile</b></i> </a>";
              } else {

              ?>

                <a href="../LOGIN/sign-up-login.php" class="nav-link" style="cursor:pointer">

                  Login
                </a>
              <?php } ?>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </header>
  <script>
    // Hide the loader overlay after 5 seconds
    setTimeout(function() {
      var loaderOverlay = document.getElementById("loader-overlay");
      var video = document.getElementById("loader-video");
      var content = document.getElementById("content");

      // Hide the loader overlay and show the content
      loaderOverlay.style.display = "none";
      video.style.display = "none";
      content.style.display = "block";
    }, 2000);

    const button = document.getElementById('navbar-toggler-icon');

// Add an event listener for the click event
button.addEventListener('click', function() {
  // Write the event handler function to close the button
  // In this example, we're simply hiding the button by changing its display property to 'none'
  button.style.display = 'none';
});
  </script>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/accordions.js"></script>

  <script src="app.js"></script>
</body>

</html>