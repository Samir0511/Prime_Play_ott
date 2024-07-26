<?php

include 'config.php';

?>


<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <title>Finance Business - About Page</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css?v=<?= $version ?>" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css?v=<?= $version ?>">
  <link rel="stylesheet" href="assets/css/templatemo-finance-business.css?v=<?= $version ?>">
  <link rel="stylesheet" href="assets/css/owl.css?v=<?= $version ?>">

</head>

<body>
  <!-- Footer Starts Here -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-3 footer-item">
          <h4>Contact us</h4>
          <ul class="social-icons">
            </li>
            <li>
              <p>Email: samirnakrani1221@gmail.com</p></a>
            </li>
            <li>
              <p>MO: 9327806417</p></a>
            </li>
           
          </ul>
          <br>
          <br>
          <br>

        </div>
        <div class="col-md-3 footer-item">
          <h4>Social Links</h4>
          <ul class="social-icons">
            <li><a rel="nofollow" href="#" target="_blank"><i class="fa fa-facebook"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
        <div class="col-md-3 footer-item">
          <h4>Additional Pages</h4>
          <ul class="menu-list">
            <li><a href="about.php">About Us</a></li>

            <li><a href="Document_page.php">Documentory Page</a></li>
            <li><a href="ALL_Video.php">All Video</a></li>


            <?php
            if (isset($_SESSION["admin"])) {


              echo ' <li>';
              echo "<a href='Responsive Sidebar menu\Responsive Sidebar menu\Homepage.php' >Admin Panel</a>";

              echo ' </li>';
            } 
            
            
            
            else {
              
              echo ' <li>';
              
              echo " <a href='Profile.php'>Profile Page</a>";
              
              echo ' </li>';
            } ?>
          </ul>
        </div>
        <div class="col-md-3 footer-item last-item">
          <h4>Contact Us</h4>
          <div class="contact-form">
            <form id="contact footer-contact" action="contact_usbg.php" method="post">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div class="sub-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>Copyright &copy; 2023


        </div>
      </div>
    </div>
  </div>



  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/accordions.js"></script>

  <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) { //declaring the array outside of the
      if (!cleared[t.id]) { // function makes it static and global
        cleared[t.id] = 1; // you could use true and false, but that's more typing
        t.value = ''; // with more chance of typos
        t.style.color = '#fff';
      }
    }
  </script>

</body>

</html>