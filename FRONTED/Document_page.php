<?php

include 'config.php';
include 'connection.php';
session_start();

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Documentory Page</title>
  <link rel="icon" href="logo_0005241.ico" type="image/x-icon">

  <link rel="stylesheet" href="style.css?v=<?= $version ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web/css/all.min.css?v=<? $version ?>">
  <link rel="stylesheet" href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web/css/all.css?v=<? $version ?>">
  <link rel="stylesheet" href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web/js/all.js?v=<? $version ?>">
  <link rel="stylesheet" href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web/js/all.min.js?v=<? $version ?>">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">


  <link rel="icon" href="logo_0005241.ico" type="image/x-icon">


  <link rel="stylesheet" href="Document_page.css?v=<?= $version ?>">
  <style>
    .movie-card {

      transition: all 0.2s ease-in-out;
    }

    .category h2 {
      padding: 25px 0;
      color: white;
      text-align: left;
    }

    /* Button used to open the contact form - fixed at the bottom of the page */
  </style>
</head>
<?php include("header.php"); ?>

<body>


  <div class="category">

    <h2>Science</h2>


  </div>
  <div class="movies-container">

    <?php

    // select all the row ids in the "science" category
    $sql = "SELECT id FROM documentory_detail WHERE category = 'Science_fiction'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      $ids = mysqli_fetch_all($result, MYSQLI_ASSOC);

      // shuffle the array of ids
      shuffle($ids);

      // select the first 5 ids
      $random_ids = array_slice($ids, 0, 7);

      // select the rows corresponding to the random ids
      $sql = "SELECT * FROM documentory_detail WHERE id IN (";
      foreach ($random_ids as $id) {
        $sql .= $id['id'] . ",";
      }
      $sql = rtrim($sql, ",") . ")";

      $result = mysqli_query($conn, $sql);

      // print the rows
      while ($row = mysqli_fetch_assoc($result)) {


        echo '  <div class="movie-card">';
        echo "  <a href='play_video.php?id={$row['id']}'>  <div class='movie-image'>";
        echo "   <img src='../ADMIN/Uploads/Thumbnail/" . $row['thumbnail2'] . "' alt='Image Not Found' align='center' >";
        echo '    </div>';
        echo '    </a>';
        echo '    <div class="movie-title">';
        echo '      <h4>' . $row['title'] . '</h4>';
        echo '   </div>';
        echo '  </div>';
      }
    }
    ?>
  </div>





  <div class="category">

    <h2>Action</h2>


  </div>
  <div class="movies-container">

    <?php

    // select all the row ids in the "science" category
    $sql = "SELECT id FROM documentory_detail WHERE category = 'Action'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      $ids = mysqli_fetch_all($result, MYSQLI_ASSOC);

      // shuffle the array of ids
      shuffle($ids);

      // select the first 5 ids
      $random_ids = array_slice($ids, 0, 7);

      // select the rows corresponding to the random ids
      $sql = "SELECT * FROM documentory_detail WHERE id IN (";
      foreach ($random_ids as $id) {
        $sql .= $id['id'] . ",";
      }
      $sql = rtrim($sql, ",") . ")";

      $result = mysqli_query($conn, $sql);

      // print the rows
      while ($row = mysqli_fetch_assoc($result)) {


        echo '  <div class="movie-card">';
        echo "  <a href='play_video.php?id={$row['id']}'>  <div class='movie-image'>";
        echo "   <img src='../ADMIN/Uploads/Thumbnail/" . $row['thumbnail2'] . "' alt='Image Not Found' align='center' >";
        echo '    </div>';
        echo '    </a>';
        echo '    <div class="movie-title">';
        echo '      <h3>' . $row['title'] . '</h3>';
        echo '   </div>';
        echo '  </div>';
      }
    }
    ?>
  </div>


  <div class="category">

    <h2>Horror</h2>


  </div>
  <div class="movies-container">

    <?php

    // select all the row ids in the "science" category
    $sql = "SELECT id FROM documentory_detail WHERE category = 'Horror'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      $ids = mysqli_fetch_all($result, MYSQLI_ASSOC);

      // shuffle the array of ids
      shuffle($ids);

      // select the first 5 ids
      $random_ids = array_slice($ids, 0, 6);

      // select the rows corresponding to the random ids
      $sql = "SELECT * FROM documentory_detail WHERE id IN (";
      foreach ($random_ids as $id) {
        $sql .= $id['id'] . ",";
      }
      $sql = rtrim($sql, ",") . ")";

      $result = mysqli_query($conn, $sql);

      // print the rows
      while ($row = mysqli_fetch_assoc($result)) {


        echo '  <div class="movie-card">';
        echo "  <a href='play_video.php?id={$row['id']}'>  <div class='movie-image'>";
        echo "   <img src='../ADMIN/Uploads/Thumbnail/" . $row['thumbnail2'] . "' alt='Image Not Found' align='center' >";
        echo '    </div>';
        echo '    </a>';
        echo '    <div class="movie-title">';
        echo '      <h3>' . $row['title'] . '</h3>';
        echo '   </div>';
        echo '  </div>';
      }
    }
    ?>
  </div>


  <div class="category">

    <h2>Drama</h2>


  </div>
  <div class="movies-container">

    <?php

    // select all the row ids in the "science" category
    $sql = "SELECT id FROM documentory_detail WHERE category = 'Drama'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      $ids = mysqli_fetch_all($result, MYSQLI_ASSOC);

      // shuffle the array of ids
      shuffle($ids);

      // select the first 5 ids
      $random_ids = array_slice($ids, 0, 7);

      // select the rows corresponding to the random ids
      $sql = "SELECT * FROM documentory_detail WHERE id IN (";
      foreach ($random_ids as $id) {
        $sql .= $id['id'] . ",";
      }
      $sql = rtrim($sql, ",") . ")";

      $result = mysqli_query($conn, $sql);

      // print the rows
      while ($row = mysqli_fetch_assoc($result)) {


        echo '  <div class="movie-card">';
        echo "  <a href='play_video.php?id={$row['id']}'>  <div class='movie-image'>";
        echo "   <img src='../ADMIN/Uploads/Thumbnail/" . $row['thumbnail2'] . "' alt='Image Not Found' align='center' >";
        echo '    </div>';
        echo '    </a>';
        echo '    <div class="movie-title">';
        echo '      <h3>' . $row['title'] . '</h3>';
        echo '   </div>';
        echo '  </div>';
      }
    }
    ?>
  </div>






  </main>

  <script src="Document_page.js"></script>

  </script>

  <?php include("footer.php"); ?>

</body>

</html>