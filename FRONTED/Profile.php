<?php

include 'config.php';

include 'connection.php';
session_start();
$user_data = $_SESSION["username"];
$user_char = $user_data;


if(!isset($_SESSION['username'])) {
  // Redirect to login page
  header("Location:sign-up-login-form/sign-up-login-form/sign-up-login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web/css/all.min.css?v=<? $version ?>">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web/css/all.css?v=<? $version ?>">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web/js/all.js?v=<? $version ?>">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web/js/all.min.js?v=<? $version ?>">
    <link rel="icon" href="logo_0005241.ico" type="image/x-icon">

  <style>
    body {
      margin: auto;
      margin: 0;
      background-color: #222222;
    }

    .flip-card-front h1 {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      color: cadetblue;
      text-align: center;
      margin-top: 20px;
    }

    h2 {
      font-family: times-new-roman;
      font-size: 20px;
      font-style: italic;
      color: #FFFFFF;
      text-align: center;
      margin-top: -5px;
      padding-bottom: 10px;
    }

    p {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      font-size: 16px;
      color: #FFFFFF;
      text-align: center;
      margin-top: 20px;
      font-style: italic;

    }

    ul {
      font-family: times-new-roman;
      font-size: 18px;
      color: #FFFFFF;
    }

    .small-image {
      width: 400px;
    }

    .large-image {
      width: 600px;
    }

    .round-border {
      border-width: 15px;
      border-style:ridge;
      border-radius: 5%;
      border-color:coral;
    }

    .square-border {
      border-width: 15px;
      border-style: double;
      border-radius: 10%;
      border-color: #FF0000;
      align: center;
    }

    .center {
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    p2 {
      font-family: times-new-roman;
      font-size: 20px;
      color: #FFFFFF;
      text-align: justify;
      margin: "10px", "10px", "10px", "10px";
    }

    .img-link {
      width: 600px;
      padding: 20px;
    }

    .flip-card {
      width: 100%;
      height: 850px;
      perspective: 1000px;
      transform: translate(0%, 0%);
      display: flex;
      justify-content: center;

    }

    .flip-card-inner {

      position: relative;
      width: 100%;
      height: 100%;
      text-align: center;
      transition: transform 0.6s;
      transform-style: preserve-3d;
    }

    .flip-card-front,
    .flip-card-back {

      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;
    }

    .flip-card-front {
      overflow: hidden;
      background-color: #222222;
    }

    .flip-card-back {
      background-color: #222222;
      transform: rotateY(180deg);
    }

    .flipped .flip-card-inner {
      transform: rotateY(180deg);
    }

    .flip-card-button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 8px 16px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin-top: 20px;
      cursor: pointer;
    }

    .flip-card-inner.flipped {
      transform: rotateY(180deg);

    }



    .forgot-password-container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 20px;
      background-color: #222222;
    }

    h1 {
      font-size: 36px;
      margin-bottom: 20px;
    }

    form {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      margin-bottom: 20px;
    }

    input[type="email"] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button[type="submit"]:hover {
      background-color: #45a049;
    }

    #message {
      font-weight: bold;
      color: red;
    }

    input[type="text"] {
      width: 100%;
      height: 100%;
      margin-top: 5%;
      padding: 10px;
      border: none;
      border-radius: 30px;
      background-color: #e0e0e0;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      font-size: 20px;
    }



    .content {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 20px;
    }

    h1 {
      font-size: 36px;
      margin-bottom: 20px;
    }

    p {
      font-size: 24px;
      text-align: center;
      max-width: 800px;
    }



    .gradient-text {
      font-size: 52px;
      background: linear-gradient(to right, #ff512f, #dd2476);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .gradient-text2 {
      font-size: 32px;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

      background: linear-gradient(to right, #ff512f, #dd2476);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .button {
      display: inline-block;
      font-size: 18px;
      font-weight: bold;
      padding: 12px 24px;
      border-radius: 50px;
      text-decoration: none;
      color: #fff;
      background: linear-gradient(to right, #ff512f, #dd2476);
      box-shadow: 0px 2px 10px rgba(221, 36, 118, 0.5);
      transition: all 0.3s ease;
    }

    .button:hover {
      transform: scale(1.1);
      box-shadow: 0px 4px 20px rgba(221, 36, 118, 0.8);
    }

    body {
      background-color: #222222;
      color: #444;
      font: 100%/30px 'Helvetica Neue', helvetica, arial, sans-serif;
      text-shadow: 0 1px 0 #fff;
    }

    strong {
      font-weight: bold;
    }

    em {
      font-style: italic;
    }

    table {
      background: #f5f5f5;
      border-collapse: separate;
      box-shadow: inset 0 1px 0 #fff;
      font-size: 20px;
      line-height: 24px;
      margin: 30px auto;
      text-align: left;
      width: 950px;
      background-color:blanchedalmond;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
table a{
  text-decoration:none;
}
    th {
      background: linear-gradient(#777, #444);
      border-left: 1px solid #555;
      border-right: 1px solid #777;
      border-top: 1px solid #555;
      border-bottom: 1px solid #333;
      box-shadow: inset 0 1px 0 #999;
      color: #fff;
      font-weight: bold;
      padding: 10px 15px;
      position: relative;
      text-shadow: 0 1px 0 #000;
    }

    th:after {
      background: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, .08));
      content: '';
      display: block;
      height: 25%;
      left: 0;
      margin: 1px 0 0 0;
      position: absolute;
      top: 25%;
      width: 100%;
    }

    th:first-child {
      border-left: 1px solid #777;
      box-shadow: inset 1px 1px 0 #999;
    }

    th:last-child {
      box-shadow: inset -1px 1px 0 #999;
    }

    td {
      border-right: 1px solid #fff;
      border-left: 1px solid #e8e8e8;
      border-top: 1px solid #fff;
      border-bottom: 1px solid #e8e8e8;
      padding: 10px 15px;
      position: relative;
      transition: all 300ms;
    }

    td:first-child {
      box-shadow: inset 1px 0 0 #fff;
    }

    td:last-child {
      border-right: 1px solid #e8e8e8;
      box-shadow: inset -1px 0 0 #fff;
    }

    tr {
    }

    tr:nth-child(odd) td {
      background: #f1f1f1 ;
    }

    tr:last-of-type td {
      box-shadow: inset 0 -1px 0 #fff;
    }

    tr:last-of-type td:first-child {
      box-shadow: inset 1px -1px 0 #fff;
    }

    tr:last-of-type td:last-child {
      box-shadow: inset -1px -1px 0 #fff;
    }

    tbody:hover td {
      color: transparent;
      text-shadow: 0 0 3px #aaa;
    }

    tbody:hover tr:hover td {
      color: #444;
      text-shadow: 0 1px 0 #fff;
    }

    @media (max-width: 954px) {
 table{
font-size: 18px;
  width: 750px;
 }
    }
 
    @media (max-width: 738px) {
 table{
font-size: 14px;
  width: 600px;
 }
    }
  </style>
</head>

<body>

  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <form class="form1" action="Profile_update.php" method="post" enctype="multipart/form-data">


          <div>
            <h1 class="gradient-text2">Hello <?php echo ($user_char); ?></h1>
          </div>

          <div class="thumbnail">
            <?php

            $query1 = "SELECT * FROM user WHERE username ='$user_char' ";


            $result1 = mysqli_query($conn, $query1);
            $row1 = mysqli_fetch_assoc($result1);




            echo '   <img class="small-image round-border center" name="dp" src="../ADMIN\Uploads\Profile_Picture/' . $row1['profile_picture'] . '" width="100px" height="250px" alt="Add Your Image">';

            ?>
          </div>
          <br>

          <div class="thumbnail">


            <input type="file" name="profile" id="">
          </div>


          <div class="box">
            <img src="<?php $ing ?> " id="img">
            <div class="text">










              <?php


              $im = "SELECT * FROM user where email || username ='$user_char' ";
              $records = mysqli_query($conn, $im);




              while ($result = mysqli_fetch_assoc($records)) {


                echo "  		<p><strong>Name : </strong>" . $result['name'] . "<br /><br />";
                echo "      	<strong>User Name : </strong>" . $result['username'] . "<br /><br />";

                echo "<strong>Email : </strong> " . $result['email'] . "  <br /><br />";
                echo "	<strong>Moblile : </strong>" . $result['mobile'] . "  <br /><br />";
                echo "<strong>Gender </strong>" . $result['gender'] . "<br /><br />";
                echo '  <input type="submit" name="Profile_Picture" class="button" value="Update Photo" />';

                $_SESSION['password']=$result['password'];
              }


              ?>
            </div>



          </div>

        </form>

      </div>
      <div class="flip-card-back">


        <form class="form1" action="Profile_update.php" method="post" enctype="multipart/form-data">

          <div class="forgot-password-container">
            <h1 class="gradient-text">Forgot Password</h1>
            <p>Please enter your Old password to reset your password</p>
           
              <input type="text" name="Old_password" placeholder="Old password" required>
              <input type="text" name="New_password" placeholder="New password" required>
              <input type="text" name="Confirm_password" placeholder="Confirm password" required><br><br>
              <input type="submit" name="resetpassword" class="button" value="Reset Password" />

          
            <button class="button" style="bottom:0; right:0; margin-left:65%;margin-top:-8%">

              <a href="Logout.php" style="text-decoration: none;color:white;">Logout</a>


            </button>
            <div id="message"></div>
          </div>
        </form>
      </div>
    </div>

    <button class="flip-card-button button">Flip Card</button>
  </div>

  <br><br><br> <br><br><br> <br><br><br>
  <div class="flip-card" style="margin-top: -6.7%;">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <form class="form1" action="Profile_update.php" method="post" enctype="multipart/form-data">


          <div>
            <h1 class="gradient-text2">Your Saved Video </h1>
          </div>

          <div class="thumbnail">

            <table>
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Type</th>
                  <th>Rating</th>
                  <th>Year</th>
              
                  <th>Link</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $im = "SELECT * FROM user WHERE username='$user_char'";
                $record = mysqli_query($conn, $im);
                $fetch = mysqli_fetch_assoc($record);

                $userid = $fetch['id'];

                $queryfordata = "SELECT * FROM watch_later WHERE Userid = $userid";
                $data = mysqli_query($conn, $queryfordata);

                while ($fetchdoc = mysqli_fetch_assoc($data)) {
                  $docid = $fetchdoc['Documentoryid'];
                  $queryfordocumentory = "SELECT * FROM documentory_detail WHERE id = $docid";
                  $datadocumentory = mysqli_query($conn, $queryfordocumentory);
                  while ($saved = mysqli_fetch_assoc($datadocumentory)) {
                ?>
                    <tr>
                      <td><strong><?php echo ucwords( $saved['title']); ?></strong></td>
                      <td><?php echo  ucwords(  $saved['type']); ?></td>
                      <td><?php echo"<i class='fa-solid fa-star' style='color:red;'></i>      ". $saved['rating']; ?></td>
                      <td><?php echo$saved['year']; ?></td>
                      <td><?php echo "<a href='play_video.php?id={$saved['id']}'> click here To watch"; ?></td>
                    </tr>
                <?php
                  }
                }
                ?>
              </tbody>
            </table>



            </tbody>
            </table>

          </div>



      </div>

      </form>

    </div>
  </div>






  <script>
    document.querySelectorAll('.flip-card-button').forEach(function(item) {
      item.addEventListener('click', function() {
        let card = this.parentNode.querySelector('.flip-card-inner');
        card.classList.toggle('flipped');
      });
    });
    const form = document.getElementById("forgot-password-form");
    const message = document.getElementById("message");

    form.addEventListener("submit", (event) => {
      event.preventDefault();
      const email = form.email.value;
      // Add code to send reset password link to the user's email
      // Here, we are just displaying a message to indicate that the form has been submitted
      message.textContent = "Password reset link has been sent to your email address.";
      form.reset();
    });
  </script>
</body>

</html>