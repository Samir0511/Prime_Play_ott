<?php

include 'config.php';

include 'connection.php';
session_start();
$user=$_SESSION['username'];

if (!isset($_SESSION['username']) and (!isset($_SESSION['admin']))) {
  // Redirect to login page

  header("Location:../LOGIN/sign-up-login.php");
  exit();
} else {  
    // Fetch the most recent record

    // Use the data in your code
  }
  $sql2 = "SELECT *  FROM user where Username='$user'";
  $result1 = mysqli_query($conn, $sql2);
  $row = mysqli_fetch_array($result1);

  if($row['Status']=='Done')
  {

  }
  else{
    
  header("Location:../FRONTED/Payment.php");

  }
?>

<?php


$id = $_GET['id'];

// Store the ID and filename in session variables
$_SESSION['selected_image_id'] = $id;



$query1 = "SELECT * FROM documentory_detail WHERE id = $id";
$query2 = "SELECT * FROM movies ";


$result2 = mysqli_query($conn, $query2);
$result1 = mysqli_query($conn, $query1);
$row2 = mysqli_fetch_assoc($result2);
$row1 = mysqli_fetch_assoc($result1);





?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="logo_0005241.ico" type="image/x-icon">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css?v=<?= $version ?>">
  <style>
    @import url(https://fonts.googleapis.com/css?family=Lato:400,300,700);
    @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

    *,
    *:before,
    *:after {
      box-sizing: border-box;
    }

    body {
      background: #43423E;
    }

    a {
      text-decoration: none;
      color: #5C7FB8;
    }

    a:hover {
      text-decoration: underline;
    }

    .movie-card {
      font: 14px/22px "Lato", Arial, sans-serif;
      color: #A9A8A3;
      margin: 0;
      padding: 0;

    }

    .container2 {

      width: 100%;
      height: 100%;
      background: #F0F0ED;
      border-radius: 5px;
      position: relative;
      left: 50%;
      transform: translate(-50%, -0%) !important;
    }

    .hero {
      height: 500px;
      margin: 0;
      position: relative;
      overflow: hidden;
      z-index: 1;
      border-top-left-radius: 5px;
      border-top-right-radius: 5px;
    }

    .hero:before {
      content: '';
      width: 100%;
      height: 100%;
      position: absolute;
      overflow: hidden;
      top: 0;
      left: 0;
      background-color: black;
      background: url('../ADMIN/Uploads/Background_image/<?php echo $row1['background_image']; ?> ') no-repeat;
      background-size: 100% 100%;
      filter: blur(3px) saturate(50%);

      z-index: -1;

      -webkit-backface-visibility: hidden;
    }

    .cover {
      position: absolute;
      top: 160px;
      left: 20px;
      z-index: 2;
      height: 450px;
      width: 250px;
    }

    .cover2 {
      position: absolute;
      top: 160px;
      left: 63%;
      z-index: 3;
      height: 320px;
      width: 450px;
    }

    .details {
      padding: 190px 0 0 280px;
    }

    .details .title1 {
      color: red;
      margin-left: 120px;
      font-size: 44px;
      margin-bottom: 13px;
      position: relative;
      font-weight: bolder;

    }

    .details .title1 span {
      position: absolute;
      top: 3px;
      margin-left: 12px;
      background: #C4AF3D;
      border-radius: 5px;
      color: #544C21;
      font-size: 14px;
      padding: 0px 4px;
    }

    .details .title2 {
      color: #C7C1BA;
      font-size: 23px;
      font-weight: 300;
      margin-bottom: 15px;
      margin-left: 120px;
    }

    .details .likes {
      margin-left: 24px;
      color: red;
      font-weight: bolder;
      font-size: large;
    }

    .details .likes:before {
      position: relative;
      top: 2px;
      padding-right: 7px;
    }

    .description {
      bottom: 0px;
      height: 470px;
      font-size: 16px;
      line-height: 26px;
      color: white;
      background-color: BLACK;
      letter-spacing: 2px;

    }

    .column1 {
      padding-left: 50px;
      padding-top: 120px;
      width: 220px;
      float: left;
      text-align: center;
      color: RED;

    }

    .tag {
      background: white;
      border-radius: 10px;
      padding: 3px 28px;
      font-size: 14px;
      margin-right: 4px;
      line-height: 35px;
      cursor: pointer;
    }

    .tag:hover {
      background: #ddd;
    }

    .column2 {
      padding-left: 61px;
      padding-top: 30px;
      margin-left: 20px;
      width: 480px;
      float: left;
    }

    .avatars {
      margin-top: 23px;
    }

    .avatars img {
      cursor: pointer;
    }

    .avatars img:hover {
      opacity: 0.6;
    }

    .avatars a:hover {
      text-decoration: none;
    }

    fieldset,
    label {
      margin: 0;
      padding: 0;
    }

    /****** Style Star Rating Widget *****/
    .rating {
      color: red;
      margin-left: 120px;
      border: none;
      float: left;
    }

    .rating>input {
      display: none;
    }

    .rating>label:before {
      margin: 5px;
      margin-top: 0;
      font-size: 1em;
      font-family: FontAwesome;
      display: inline-block;
      content: "\f005";
    }

    .rating>.half:before {
      content: "\f089";
      position: absolute;
    }

    .rating>label {
      color: yellow;

      float: right;
    }

    /***** CSS Magic to Highlight Stars on Hover *****/




    a[data-tooltip] {
      position: relative;
    }

    a[data-tooltip]::before,
    a[data-tooltip]::after {
      position: absolute;
      display: none;
      opacity: 0.85;
    }

    a[data-tooltip]::before {
      /*
   * using data-tooltip instead of title so we 
   * don't have the real tooltip overlapping
   */
      content: attr(data-tooltip);
      background: #000;
      color: #fff;
      font-size: 13px;
      padding: 5px;
      border-radius: 5px;
      /* we don't want the text to wrap */
      white-space: nowrap;
      text-decoration: none;
    }

    a[data-tooltip]::after {
      width: 0;
      height: 0;
      border: 6px solid transparent;
      content: '';
    }

    a[data-tooltip]:hover::before,
    a[data-tooltip]:hover::after {
      display: block;
    }

    /** positioning **/
    /* top tooltip */
    a[data-tooltip][data-placement="top"]::before {
      bottom: 100%;
      left: 0;
      margin-bottom: 40px;
    }

    a[data-tooltip][data-placement="top"]::after {
      border-top-color: #000;
      border-bottom: none;
      bottom: 50px;
      left: 20px;
      margin-bottom: 4px;
    }
  </style>
</head>

<body>

  <?php include("header.php"); ?>







  <div class="container2">
    <?php echo "    <a href=''> <img class='cover' src='../ADMIN/Uploads/Thumbnail/" . $row1['thumbnail2'] . "' alt='Image Not Found'></a>"; ?>



    <div class="hero">

      <div class="details">

        <div class="title1">

          <?php
          echo "" . ucwords($row1['title']) . " ";

          ?>
        </div>

        <div class="title2">
          <?php

          ?>




        </div>

        <fieldset class="rating">

          <?php
          $stars = $row1['rating'];


          for ($i = 1; $i <= $stars; $i++) {
            echo ' <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="' . $row1["rating"] . ' star is Good"></label>';
          }



          ?>


        </fieldset>

        <span class="likes">
          <?php
          $title = $row1['id'];

          $current = $row1['views'];
          $newcount = $current + 1;
          $newsql = "UPDATE documentory_detail SET views = '$newcount' WHERE id='$title' ";
          $updatecount = mysqli_query($conn, $newsql);
          echo " Views:" . $newcount;




          $title22 = $row1['title'];
          $current2 = $row2['views'];
          $newcount2 = $current2 + 1;
          $newsql2 = "UPDATE movies SET views = '$newcount2' WHERE title='$title22' ";
          $updatecount2 = mysqli_query($conn, $newsql2);




          ?>
        </span>

      </div> <!-- end details -->

    </div> <!-- end hero -->
    <?php

    echo " <video src='../ADMIN/Uploads/Videos/" . $row1['video'] . "' controls lang='hi' class='cover2'></video> ";
    ?>




    <div class="description">

      <div class="column1">

        <?php

        $sentence = $row1['type'];
        $words = explode(",", $sentence);
        $word_list = array();
        foreach ($words as $word) {
          $word_list[] = trim($word);
        }


        foreach ($word_list as $word1) {


          echo " <span class='tag'>" . $word1 . "</span>";
        }


        ?>



      </div> <!-- end column1 -->

      <div class="column2">

        <p>

          <?php

          echo "" . ucfirst($row1['desciption']) . " ";
          ?>


        </p>


      </div> <!-- end column2 -->
    </div> <!-- end description -->


  </div> <!-- end container -->

  <!-- end movie-card -->
  <br>
  <br><br><br>
  <main style="backgroung-color:#212529;">

    <?php











    // Initialize the variable
    $Categories = 0;

    // Check if the form has been submitted
    if (isset($_POST['type'])) {
      // Add the value of the clicked button to the variable
      $Categories = $_POST['type'];
    }


    //1920x1080
    //bg
    //1920x580
    



    ?>
    <?php


    //Science_fiction    History  Nature  Action  Horror  Drama
    
    $im = "SELECT * FROM documentory_detail where type  like  '%$word_list[1]%'";
    $records = mysqli_query($conn, $im);






    echo " <section class='card-row'>";
    while ($result = mysqli_fetch_assoc($records)) {

      echo "<a href='play_video.php?id={$result['id']}'>";
      echo "      <article class='card' style='background-color:#161d2d;'>";
      echo "   <img src='../ADMIN/Uploads/Thumbnail/" . $result['thumnail'] . "' alt='Image Not Found' >";
      echo "     <h3>    " . ucwords($result['title']) . "</h3>";


      echo "    </article>";
      echo "    </a>";
    }
    echo "   </section>";


    ?>






  </main>


  <?php include("footer.php"); ?>
</body>

</html>