<?php

include("configration.php");
include("connection.php");
session_start();
if (isset($_SESSION["admin"])) {
    $user_data = $_SESSION["admin"];
    $user_char = $user_data;
  }
  else{
    header('Location:../FRONTED/index.php');
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sidebar.css?v=<?= $versionn ?>">
    <link rel="stylesheet" href="style.css?v=<?= $versionn ?>">
    <title>Admin Homepage</title>
    <link rel="icon" href="logo_0005241.ico" type="image/x-icon">

    <link rel="stylesheet"
        href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web\fontawesome-free-6.2.1-web\css/all.min.css?v=<? $version ?>">
    <link rel="stylesheet"
        href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web\fontawesome-free-6.2.1-web\css/all.css?v=<? $version ?>">
    <link rel="stylesheet"
        href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web\fontawesome-free-6.2.1-web\js/all.min.js?v=<? $version ?>">
    <link rel="stylesheet"
        href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web\fontawesome-free-6.2.1-web\js/all.js?v=<? $version ?>">
    <style>
        #loader-overlay {
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgb(0, 0, 0);

        }

        #loader-video {
            max-width: 100%;
            max-height: 100%;
        }

        #content {
            display: none;
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
    </style>
</head>

<body>

    <div id="loader-overlay">
        <video id="loader-video" autoplay loop muted transparent>
            <source src="logo_2chicxulub-impact-event-.mp4" type="video/mp4">
        </video>
    </div>


    <div class="sidebar">
        <div class="logo-details">
            <div class="logo_name ">
                <a herf="Homepage.php" class="gradient-text">
                    Prime&nbsp;Play
                </a>

            </div>
            <i class="fa-solid fa-bars" id="btn"></i>
        </div>
        <ul>

            <li class="list active">
                <a href="Homepage.php">
                    <i class="fa-solid fa-house"></i>
                    <span class="links_name">Homepage</span>
                </a>
                <span class="tooltip">Homepage</span>
            </li>

            <li class="list">
                <a href="chart.php">
                    <i class="fa-solid fa-chart-line"></i>
                    <span class="links_name">Analytics</span>
                </a>
                <span class="tooltip">Analytics</span>
            </li>
            <li class="list">
                <a href="Documentory_upload.php">
                    <i class="fa-solid fa-file-arrow-up"></i>
                    <span class="links_name">Documentory Upload</span>
                </a>
                <span class="tooltip">Documentory Upload</span>
            </li>

            <li class="list">
                <a href="Documentory_detail.php">
                    <i class="fa-solid fa-circle-info"></i>
                    <span class="links_name">Documentory Details</span>
                </a>
                <span class="tooltip">Documentory Details</span>
            </li>

            <li class="list">
                <a href="User_details.php">
                    <i class="fa-solid fa-users-line"></i>
                    <span class="links_name">User</span>
                </a>
                <span class="tooltip">User</span>
            </li>
            <li class="list">
                <a href="message.php">
                    <i class="fa-regular fa-comment-dots fa-5x"></i>
                    <span class="links_name">message</span>
                </a>
                <span class="tooltip">message</span>
            </li>

            <li class="list">
                <a href="Logout.php">
                    <i class="fa-solid fa-circle-user"></i>
                    <span class="links_name">Admin logout</span>
                </a>
                <span class="tooltip">logout</span>
            </li>
            <li class="list">
                <a href="../FRONTED/index.php">
                    <i class="fa-solid fa-globe"></i>
                    <span class="links_name">Go TO Fronted</span>
                </a>
                <span class="tooltip">Go To Fronted</span>
            </li>

        </ul>
    </div>
    <script src="script.js"></script>

    <section class="home-section">
        <div class="text">

            <div class="main_content">

                <div class="info">





                    <div class="child_container">

                        <div class="icon_class">


                            <a href="User_details.php" style="text-decoration: none; color:black;"> <i
                                    class="fa-solid fa-users fa-5x"></i></a>
                            <?php

                            $sql2 = "SELECT COUNT(*) as total FROM user";
                            $result2 = mysqli_query($connn, $sql2);

                            if (mysqli_num_rows($result2) > 0) {
                                // Fetch the most recent record
                                $row2 = mysqli_fetch_assoc($result2);

                                // Use the data in your code
                                echo "<p>" . $row2["total"] . "</p>";
                            } else {
                                echo "No recent data found.";
                            }

                            ?>
                            <p>
                                Total User
                            </p>
                        </div>
                        <div class="icon_class">


                            <a href="User_details.php" style="text-decoration: none; color:black;"> <i
                                    class="fa-regular fa-user fa-5x"></i></a>

                            <?php



                            $sql = "SELECT * FROM user ORDER BY id DESC LIMIT 1";
                            $result = mysqli_query($connn, $sql);

                            // Check the result
                            if (mysqli_num_rows($result) > 0) {
                                // Fetch the most recent record
                                $row = mysqli_fetch_assoc($result);

                                // Use the data in your code
                                echo "<p>" . $row["name"] . "</p>";
                            } else {
                                echo "No recent data found.";
                            }

                            ?>
                            <p>
                                Recently User
                            </p>
                        </div>
                        <div class="icon_class">


                            <a href="message.php" style="text-decoration: none; color:black;"> <i
                                    class="fa-regular fa-comment-dots fa-5x"></i></a>
                            <p>
                                <?php

                                $sql3 = "SELECT COUNT(*) as total FROM message";
                                $result3 = mysqli_query($connn, $sql3);

                                if (mysqli_num_rows($result3) > 0) {
                                    // Fetch the most recent record
                                    $row3 = mysqli_fetch_assoc($result3);

                                    // Use the data in your code
                                    echo "" . $row3["total"] . "";
                                } else {
                                    echo "No recent data found.";
                                }

                                ?>
                            </p>
                            <p>
                                Comments
                            </p>
                        </div>

                    </div>
                    <!--Shows All USers(total users||login users||comments)-->




                    <div class="scroll back_image">


                        <div class="Image_Title">

                            <h3>
                                <p align="center">
                                    Background Image Update
                                </p>
                            </h3>
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="background_image">


                            <div class="Images">

                                <form action="slider_thumbnail.PHP" method="post" enctype="multipart/form-data">
                                    <table border="0">

                                        <tr>
                                            <td colspan="2">
                                                <?php
                                                $query1 = "SELECT * FROM slider_thumbnail WHERE id = 1";

                                                $result1 = mysqli_query($connn, $query1);
                                                $row1 = mysqli_fetch_assoc($result1);

                                                echo "   <img src='Uploads/Thumbnail/" . $row1['thubnail'] . "' alt='Image Not Found' style='width:100%' >";
                                                ?>
                                                <br>


                                                <select name="movie_select" id="movie_select" style="width: 53%;">
                                                    <option value="0" selected>Choose Movie</option>

                                                    <?php
                                                    $movie = "SELECT * FROM documentory_detail ";
                                                    $movieq = mysqli_query($connn, $movie);
                                                    while ($movief = mysqli_fetch_assoc($movieq)) {
                                                        ?>
                                                        <option value="<?php echo $movief['id']; ?>">
                                                            <?php echo ucwords($movief['title']); ?>
                                                        </option>

                                                        <?php

                                                    }


                                                    ?>

                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="file" name="slider01"><br>
                                            </td>
                                        </tr>

                                        <tr>

                                            <td colspan="2" align="center">

                                                <input type="submit" name="slide1" class="button"
                                                    value="Update Photo" />

                                            </td>
                                        </tr>

                                    </table>
                                </form>
                            </div>
                            <div class="Images">

                                <form action="slider_thumbnail.PHP" method="post" enctype="multipart/form-data">
                                    <table border="0">

                                        <tr>
                                            <td colspan="2">
                                                <?php

                                                $query1 = "SELECT * FROM slider_thumbnail WHERE id = 2";


                                                $result1 = mysqli_query($connn, $query1);
                                                $row1 = mysqli_fetch_assoc($result1);

                                                echo "   <img src='Uploads/Thumbnail/" . $row1['thubnail'] . "' alt='Image Not Found' style='width:100%' >";

                                                ?>
                                                <br>
                                                <select name="movie_select" id="movie_select" style="width: 53%;">
                                                    <option value="0" selected>Choose Movie</option>

                                                    <?php
                                                    $movie = "SELECT * FROM documentory_detail ";
                                                    $movieq = mysqli_query($connn, $movie);
                                                    while ($movief = mysqli_fetch_assoc($movieq)) {
                                                        ?>
                                                        <option value="<?php echo $movief['id']; ?>">
                                                            <?php echo ucwords($movief['title']); ?>
                                                        </option>

                                                        <?php

                                                    }


                                                    ?>

                                                </select>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="file" name="slider02"><br>
                                            </td>
                                        </tr>

                                        <tr>

                                            <td colspan="2" align="center">

                                                <input type="submit" name="slide2" class="button"
                                                    value="Update Photo" />

                                            </td>
                                        </tr>

                                    </table>
                                </form>
                            </div>


                            <div class="Images">

                                <form action="slider_thumbnail.PHP" method="post" enctype="multipart/form-data">
                                    <table border="0">

                                        <tr>
                                            <td colspan="2">
                                                <?php

                                                $query1 = "SELECT * FROM slider_thumbnail WHERE id = 3";


                                                $result1 = mysqli_query($connn, $query1);
                                                $row1 = mysqli_fetch_assoc($result1);

                                                echo "   <img src='Uploads/Thumbnail/" . $row1['thubnail'] . "' alt='Image Not Found'style='width:100%'  >";

                                                ?>
                                                <br>
                                                <select name="movie_select" id="movie_select" style="width: 53%;">
                                                    <option value="0" selected>Choose Movie</option>

                                                    <?php
                                                    $movie = "SELECT * FROM documentory_detail ";
                                                    $movieq = mysqli_query($connn, $movie);
                                                    while ($movief = mysqli_fetch_assoc($movieq)) {
                                                        ?>
                                                        <option value="<?php echo $movief['id']; ?>">
                                                            <?php echo ucwords($movief['title']); ?>
                                                        </option>

                                                        <?php

                                                    }


                                                    ?>

                                                </select>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="file" name="slider03"><br>
                                            </td>
                                        </tr>

                                        <tr>

                                            <td colspan="2" align="center">

                                                <input type="submit" name="slide3" class="button"
                                                    value="Update Photo" />

                                            </td>
                                        </tr>

                                    </table>
                                </form>
                            </div>
                            <div class="Images">

                                <form action="slider_thumbnail.PHP" method="post" enctype="multipart/form-data">
                                    <table border="0">

                                        <tr>
                                            <td colspan="2">
                                                <?php

                                                $query1 = "SELECT * FROM slider_thumbnail WHERE id = 7";


                                                $result1 = mysqli_query($connn, $query1);
                                                $row1 = mysqli_fetch_assoc($result1);

                                                echo "   <img src='Uploads/Thumbnail/" . $row1['thubnail'] . "' alt='Image Not Found'style='width:100%'  >";


                                                ?>
                                                <br>
                                                <select name="movie_select" id="movie_select" style="width: 53%;">
                                                    <option value="0" selected>Choose Movie</option>

                                                    <?php
                                                    $movie = "SELECT * FROM documentory_detail ";
                                                    $movieq = mysqli_query($connn, $movie);
                                                    while ($movief = mysqli_fetch_assoc($movieq)) {
                                                        ?>
                                                        <option value="<?php echo $movief['id']; ?>">
                                                            <?php echo ucwords($movief['title']); ?>
                                                        </option>

                                                        <?php

                                                    }


                                                    ?>

                                                </select>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="file" name="slider04"><br>
                                            </td>
                                        </tr>

                                        <tr>

                                            <td colspan="2" align="center">

                                                <input type="submit" name="slide4" class="button"
                                                    value="Update Photo" />

                                            </td>
                                        </tr>

                                    </table>
                                </form>
                            </div>

                            <div class="Images">

                                <form action="slider_thumbnail.PHP" method="post" enctype="multipart/form-data">
                                    <table border="0">

                                        <tr>
                                            <td colspan="2">
                                                <?php

                                                $query1 = "SELECT * FROM slider_thumbnail WHERE id = 8";


                                                $result1 = mysqli_query($connn, $query1);
                                                $row1 = mysqli_fetch_assoc($result1);

                                                echo "   <img src='Uploads/Thumbnail/" . $row1['thubnail'] . "' alt='Image Not Found'style='width:100%'  >";


                                                ?>
                                                <br>
                                                <select name="movie_select" id="movie_select" style="width: 53%;">
                                                    <option value="0" selected>Choose Movie</option>

                                                    <?php
                                                    $movie = "SELECT * FROM documentory_detail ";
                                                    $movieq = mysqli_query($connn, $movie);
                                                    while ($movief = mysqli_fetch_assoc($movieq)) {
                                                        ?>
                                                        <option value="<?php echo $movief['id']; ?>">
                                                            <?php echo ucwords($movief['title']); ?>
                                                        </option>

                                                        <?php

                                                    }


                                                    ?>

                                                </select>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="file" name="slider05"><br>



                                            </td>
                                        </tr>

                                        <tr>

                                            <td colspan="2" align="center">

                                                <input type="submit" name="slide5" class="button"
                                                    value="Update Photo" />

                                            </td>
                                        </tr>

                                    </table>
                                </form>
                            </div>

                        </div>

                        <div class="image_footer">


                        </div>

                        <br>
                        <br>
                        <br>
                        <div class="Image_Title">

                            <h3>
                                <p align="center">
                                    Slideshow Image Update
                                </p>
                            </h3>
                        </div>


                        <div class="slideshow_home">

                            <div class="slide">
                                <form action="slideshow_thumbnail.php" method="post" enctype="multipart/form-data">
                                    <table border="0">

                                        <tr>
                                            <td colspan="2">
                                                <?php

                                                $query1 = "SELECT * FROM slideshow_thumbnail WHERE id = 1";


                                                $result1 = mysqli_query($connn, $query1);
                                                $row1 = mysqli_fetch_assoc($result1);

                                                echo "   <img src='Uploads/Thumbnail/" . $row1['thumbnail_sli'] . "' alt='Image Not Found' >";


                                                ?>
                                                <br>
                                                <select name="movie_select" id="movie_select" style="width: 53%;">
                                                    <option value="0" selected>Choose Movie</option>

                                                    <?php
                                                    $movie = "SELECT * FROM documentory_detail ";
                                                    $movieq = mysqli_query($connn, $movie);
                                                    while ($movief = mysqli_fetch_assoc($movieq)) {
                                                        ?>
                                                        <option value="<?php echo $movief['id']; ?>">
                                                            <?php echo ucwords($movief['title']); ?>
                                                        </option>

                                                        <?php

                                                    }


                                                    ?>

                                                </select>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="file" name="slideshow1"><br>
                                            </td>
                                        </tr>


                                        <tr>

                                            <td colspan="2" align="center">
                                                <br>

                                                <input type="submit" name="slideshow1" class="button"
                                                    value="Update Photo" />

                                            </td>
                                        </tr>

                                    </table>




                                </form>


                            </div>

                            <div class="slide">
                                <form action="slideshow_thumbnail.php" method="post" enctype="multipart/form-data">

                                    <table border="0">

                                        <tr>
                                            <td colspan="2">
                                                <?php

                                                $query1 = "SELECT * FROM slideshow_thumbnail WHERE id = 2";


                                                $result1 = mysqli_query($connn, $query1);
                                                $row1 = mysqli_fetch_assoc($result1);

                                                echo "   <img src='Uploads/Thumbnail/" . $row1['thumbnail_sli'] . "' alt='Image Not Found' >";


                                                ?>
                                                <br>
                                                <select name="movie_select" id="movie_select" style="width: 53%;">
                                                    <option value="0" selected>Choose Movie</option>

                                                    <?php
                                                    $movie = "SELECT * FROM documentory_detail ";
                                                    $movieq = mysqli_query($connn, $movie);
                                                    while ($movief = mysqli_fetch_assoc($movieq)) {
                                                        ?>
                                                        <option value="<?php echo $movief['id']; ?>">
                                                            <?php echo ucwords($movief['title']); ?>
                                                        </option>

                                                        <?php

                                                    }


                                                    ?>

                                                </select>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="file" name="slideshow2"><br>
                                            </td>
                                        </tr>


                                        <tr>

                                            <td colspan="2" align="center">
                                                <br>

                                                <input type="submit" name="slideshow2" class="button"
                                                    value="Update Photo" />

                                            </td>
                                        </tr>

                                    </table>

                                </form>





                            </div>

                            <div class="slide">
                                <form action="slideshow_thumbnail.php" method="post" enctype="multipart/form-data">

                                    <table border="0">

                                        <tr>
                                            <td colspan="2">
                                                <?php

                                                $query1 = "SELECT * FROM slideshow_thumbnail WHERE id = 3";


                                                $result1 = mysqli_query($connn, $query1);
                                                $row1 = mysqli_fetch_assoc($result1);

                                                echo "   <img src='Uploads/Thumbnail/" . $row1['thumbnail_sli'] . "' alt='Image Not Found' >";


                                                ?>
                                                <br>
                                                <select name="movie_select" id="movie_select" style="width: 53%;">
                                                    <option value="0" selected>Choose Movie</option>

                                                    <?php
                                                    $movie = "SELECT * FROM documentory_detail ";
                                                    $movieq = mysqli_query($connn, $movie);
                                                    while ($movief = mysqli_fetch_assoc($movieq)) {
                                                        ?>
                                                        <option value="<?php echo $movief['id']; ?>">
                                                            <?php echo ucwords($movief['title']); ?>
                                                        </option>

                                                        <?php

                                                    }


                                                    ?>

                                                </select>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="file" name="slideshow3"><br>
                                            </td>
                                        </tr>


                                        <tr>

                                            <td colspan="2" align="center">
                                                <br>

                                                <input type="submit" name="slideshow3" class="button"
                                                    value="Update Photo" />

                                            </td>
                                        </tr>

                                    </table>



                                </form>



                            </div>

                            <div class="slide">
                                <form action="slideshow_thumbnail.php" method="post" enctype="multipart/form-data">

                                    <table border="0">

                                        <tr>
                                            <td colspan="2">
                                                <?php

                                                $query1 = "SELECT * FROM slideshow_thumbnail WHERE id = 4";


                                                $result1 = mysqli_query($connn, $query1);
                                                $row1 = mysqli_fetch_assoc($result1);

                                                echo "   <img src='Uploads/Thumbnail/" . $row1['thumbnail_sli'] . "' alt='Image Not Found' >";


                                                ?>
                                                <br>
                                                <select name="movie_select" id="movie_select" style="width: 53%;">
                                                    <option value="0" selected>Choose Movie</option>

                                                    <?php
                                                    $movie = "SELECT * FROM documentory_detail ";
                                                    $movieq = mysqli_query($connn, $movie);
                                                    while ($movief = mysqli_fetch_assoc($movieq)) {
                                                        ?>
                                                        <option value="<?php echo $movief['id']; ?>">
                                                            <?php echo ucwords($movief['title']); ?>
                                                        </option>

                                                        <?php

                                                    }


                                                    ?>

                                                </select>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="file" name="slideshow4"><br>
                                            </td>
                                        </tr>


                                        <tr>

                                            <td colspan="2" align="center">
                                                <br>

                                                <input type="submit" name="slideshow4" class="button"
                                                    value="Update Photo" />

                                            </td>
                                        </tr>

                                    </table>




                                </form>


                            </div>

                            <div class="slide">
                                <form action="slideshow_thumbnail.php" method="post" enctype="multipart/form-data">

                                    <table border="0">

                                        <tr>
                                            <td colspan="2">
                                                <?php

                                                $query1 = "SELECT * FROM slideshow_thumbnail WHERE id = 5";


                                                $result1 = mysqli_query($connn, $query1);
                                                $row1 = mysqli_fetch_assoc($result1);

                                                echo "   <img src='Uploads/Thumbnail/" . $row1['thumbnail_sli'] . "' alt='Image Not Found' >";


                                                ?>
                                                <br>
                                                <select name="movie_select" id="movie_select" style="width: 53%;">
                                                    <option value="0" selected>Choose Movie</option>

                                                    <?php
                                                    $movie = "SELECT * FROM documentory_detail ";
                                                    $movieq = mysqli_query($connn, $movie);
                                                    while ($movief = mysqli_fetch_assoc($movieq)) {
                                                        ?>
                                                        <option value="<?php echo $movief['id']; ?>">
                                                            <?php echo ucwords($movief['title']); ?>
                                                        </option>

                                                        <?php

                                                    }


                                                    ?>

                                                </select>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="file" name="slideshow5"><br>
                                            </td>
                                        </tr>


                                        <tr>

                                            <td colspan="2" align="center">
                                                <br>

                                                <input type="submit" name="slideshow5" class="button"
                                                    value="Update Photo" />

                                            </td>
                                        </tr>

                                    </table>

                                </form>





                            </div>

                            <div class="slide">
                                <form action="slideshow_thumbnail.php" method="post" enctype="multipart/form-data">

                                    <table border="0">

                                        <tr>
                                            <td colspan="2">
                                                <?php

                                                $query1 = "SELECT * FROM slideshow_thumbnail WHERE id = 6";


                                                $result1 = mysqli_query($connn, $query1);
                                                $row1 = mysqli_fetch_assoc($result1);

                                                echo "   <img src='Uploads/Thumbnail/" . $row1['thumbnail_sli'] . "' alt='Image Not Found' >";


                                                ?>
                                                <br>
                                                <select name="movie_select" id="movie_select" style="width: 53%;">
                                                    <option value="0" selected>Choose Movie</option>

                                                    <?php
                                                    $movie = "SELECT * FROM documentory_detail ";
                                                    $movieq = mysqli_query($connn, $movie);
                                                    while ($movief = mysqli_fetch_assoc($movieq)) {
                                                        ?>
                                                        <option value="<?php echo $movief['id']; ?>">
                                                            <?php echo ucwords($movief['title']); ?>
                                                        </option>

                                                        <?php

                                                    }


                                                    ?>

                                                </select>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="file" name="slideshow6"><br>
                                            </td>
                                        </tr>


                                        <tr>

                                            <td colspan="2" align="center">
                                                <br>

                                                <input type="submit" name="slideshow6" class="button"
                                                    value="Update Photo" />

                                            </td>
                                        </tr>

                                    </table>



                                </form>



                            </div>

                            <div class="slide">
                                <form action="slideshow_thumbnail.php" method="post" enctype="multipart/form-data">

                                    <table border="0">

                                        <tr>
                                            <td colspan="2">
                                                <?php

                                                $query1 = "SELECT * FROM slideshow_thumbnail WHERE id = 7";


                                                $result1 = mysqli_query($connn, $query1);
                                                $row1 = mysqli_fetch_assoc($result1);

                                                echo "   <img src='Uploads/Thumbnail/" . $row1['thumbnail_sli'] . "' alt='Image Not Found' >";


                                                ?>

                                                <br>
                                                <select name="movie_select" id="movie_select" style="width: 53%;">
                                                    <option value="0" selected>Choose Movie</option>

                                                    <?php
                                                    $movie = "SELECT * FROM documentory_detail ";
                                                    $movieq = mysqli_query($connn, $movie);
                                                    while ($movief = mysqli_fetch_assoc($movieq)) {
                                                        ?>
                                                        <option value="<?php echo $movief['id']; ?>">
                                                            <?php echo ucwords($movief['title']); ?>
                                                        </option>

                                                        <?php

                                                    }


                                                    ?>

                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="file" name="slideshow7"><br>
                                            </td>
                                        </tr>


                                        <tr>

                                            <td colspan="2" align="center">
                                                <br>

                                                <input type="submit" name="slideshow7" class="button"
                                                    value="Update Photo" />

                                            </td>
                                        </tr>

                                    </table>


                                </form>




                            </div>

                            <div class="slide">
                                <form action="slideshow_thumbnail.php" method="post" enctype="multipart/form-data">

                                    <table border="0">

                                        <tr>
                                            <td colspan="2">
                                                <?php

                                                $query1 = "SELECT * FROM slideshow_thumbnail WHERE id = 8";


                                                $result1 = mysqli_query($connn, $query1);
                                                $row1 = mysqli_fetch_assoc($result1);

                                                echo "   <img src='Uploads/Thumbnail/" . $row1['thumbnail_sli'] . "' alt='Image Not Found' >";


                                                ?>

                                                <br>
                                                <select name="movie_select" id="movie_select" style="width: 53%;">
                                                    <option value="0" selected>Choose Movie</option>

                                                    <?php
                                                    $movie = "SELECT * FROM documentory_detail ";
                                                    $movieq = mysqli_query($connn, $movie);
                                                    while ($movief = mysqli_fetch_assoc($movieq)) {
                                                        ?>
                                                        <option value="<?php echo $movief['id']; ?>">
                                                            <?php echo ucwords($movief['title']); ?>
                                                        </option>

                                                        <?php

                                                    }


                                                    ?>

                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="file" name="slideshow8"><br>
                                            </td>
                                        </tr>


                                        <tr>

                                            <td colspan="2" align="center">
                                                <br>

                                                <input type="submit" name="slideshow8" class="button"
                                                    value="Update Photo" />

                                            </td>
                                        </tr>

                                    </table>


                                </form>




                            </div>

                            <div class="slide">
                                <form action="slideshow_thumbnail.php" method="post" enctype="multipart/form-data">

                                    <table border="0">

                                        <tr>
                                            <td colspan="2">
                                                <?php

                                                $query1 = "SELECT * FROM slideshow_thumbnail WHERE id = 9";


                                                $result1 = mysqli_query($connn, $query1);
                                                $row1 = mysqli_fetch_assoc($result1);

                                                echo "   <img src='Uploads/Thumbnail/" . $row1['thumbnail_sli'] . "' alt='Image Not Found' >";


                                                ?>

                                                <br>
                                                <select name="movie_select" id="movie_select" style="width: 53%;">
                                                    <option value="0" selected>Choose Movie</option>

                                                    <?php
                                                    $movie = "SELECT * FROM documentory_detail ";
                                                    $movieq = mysqli_query($connn, $movie);
                                                    while ($movief = mysqli_fetch_assoc($movieq)) {
                                                        ?>
                                                        <option value="<?php echo $movief['id']; ?>">
                                                            <?php echo ucwords($movief['title']); ?>
                                                        </option>

                                                        <?php

                                                    }


                                                    ?>

                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="file" name="slideshow9"><br>
                                            </td>
                                        </tr>


                                        <tr>

                                            <td colspan="2" align="center">
                                                <br>

                                                <input type="submit" name="slideshow9" class="button"
                                                    value="Update Photo" />

                                            </td>
                                        </tr>

                                    </table>



                                </form>



                            </div>

                            <div class="slide">
                                <form action="slideshow_thumbnail.php" method="post" enctype="multipart/form-data">

                                    <table border="0">

                                        <tr>
                                            <td colspan="2">
                                                <?php

                                                $query1 = "SELECT * FROM slideshow_thumbnail WHERE id = 10";


                                                $result1 = mysqli_query($connn, $query1);
                                                $row1 = mysqli_fetch_assoc($result1);

                                                echo "   <img src='Uploads/Thumbnail/" . $row1['thumbnail_sli'] . "' alt='Image Not Found' >";


                                                ?>
                                                <br>
                                                <select name="movie_select" id="movie_select" style="width: 53%;">
                                                    <option value="0" selected>Choose Movie</option>

                                                    <?php
                                                    $movie = "SELECT * FROM documentory_detail ";
                                                    $movieq = mysqli_query($connn, $movie);
                                                    while ($movief = mysqli_fetch_assoc($movieq)) {
                                                        ?>
                                                        <option value="<?php echo $movief['id']; ?>">
                                                            <?php echo ucwords($movief['title']); ?>
                                                        </option>

                                                        <?php

                                                    }


                                                    ?>

                                                </select>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="file" name="slideshow10"><br>
                                            </td>
                                        </tr>


                                        <tr>

                                            <td colspan="2" align="center">
                                                <br>

                                                <input type="submit" name="slideshow10" class="button"
                                                    value="Update Photo" />

                                            </td>
                                        </tr>

                                    </table>

                                </form>





                            </div>



                        </div>

                    </div>
                </div>
            </div>
    </section>
    <script>
        // Hide the loader overlay after 5 seconds
        setTimeout(function () {
            var loaderOverlay = document.getElementById("loader-overlay");
            var video = document.getElementById("loader-video");
            var content = document.getElementById("content");

            // Hide the loader overlay and show the content
            loaderOverlay.style.display = "none";
            video.style.display = "none";
            content.style.display = "block";
        }, 2000);
    </script>
</body>

</html>