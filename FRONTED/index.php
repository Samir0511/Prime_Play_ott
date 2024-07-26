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
    <title>Homepage</title>
    <link rel="stylesheet" href="style.css?v=<?= $version ?>">
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
    <title> Homepage</title>
    <style>
        a {
            text-decoration: none;
        }

        .-btn {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 286px;
            height: 106px;
            text-align: center;
            left: 30%;
            border-radius: 12px;

            font-size: 50px;
            color: #FFF;
            transition: all 0.5s;
            position: absolute;
        }

        .-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0%;
            width: 100%;
            height: 100%;
            z-index: 1;
            transition: all 0.5s;
            border: 1px solid rgba(255, 255, 255, 0.2);
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 12px;

        }

        .-btn::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            transition: all 0.5s;
            border: 1px solid rgba(255, 255, 255, 0.2);
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 12px;

        }


        .-btn:hover::before {
            transform: rotate(-45deg);
            width: 300px;
        }

        .-btn:hover::after {
            width: 300px;

            transform: rotate(45deg);
        }

        .-btn:hover {
            background-color: transparent;
            color: white;

        }

        .-bg {
            background: red;
        }

        .-txt {
            color: #fff;
        }

        .-xs {
            font-size: 50px;
        }

        /* Button used to open the contact form - fixed at the bottom of the page */
    </style>
</head>

<body>

    <?php include("header.php");

    ?>


    <div class="slider2">

        <div class="slide active">

            <?php $query1 = "SELECT * FROM slider_thumbnail WHERE id = 1";


            $result1 = mysqli_query($conn, $query1);
            $row1 = mysqli_fetch_assoc($result1);



            echo " <a href='play_video.php?id=55'>";
            ?>
            <?php

            echo "   <img src='../ADMIN/Uploads/Thumbnail/" . $row1['thubnail'] . "' alt='Image Not Found'  width='80%'  height='500px' align='center' >";
            ?>


            </a>
        </div>
        <?php  $query1 = "SELECT * FROM slider_thumbnail ORDER BY RAND()";


$result1 = mysqli_query($conn, $query1);
        while($image_slider = mysqli_fetch_assoc($result1))
        {
            
?>
        <div class="slide ">
            <a href="play_video.php">

                <?php 

                echo " <a href='play_video.php?id=".$image_slider['id']."'>";
                ?>

                <?php
                echo "   <img src='../ADMIN/Uploads/Thumbnail/" . $image_slider['thubnail'] . "' alt='Image Not Found'  width='80%'  height='500px' align='center' >";
                ?>

            </a>
        </div>
<?php
    }

    ?>
        <div class="navigation">
            <i class="fas fa-chevron-left prev-btn"></i>
            <i class="fas fa-chevron-right next-btn"></i>
        </div>
        <div class="navigation-visibility">
            <div class="slide-icon active"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
        </div>
    </div>
    <br>
    <br>
    <br>
<h2 style="color:white;float: left;">
    Recently Uploaded
</h2>

    <div class="items">
        <?php $sql14 = "SELECT * FROM documentory_detail ORDER BY id desc limit 12";
        $resultimg = mysqli_query($conn, $sql14);

        if (mysqli_num_rows($resultimg) > 0) {
            while ($rowimg = mysqli_fetch_assoc($resultimg)) {


                $data = array('id' => $rowimg['id'], 'title' => $rowimg['title']);



                echo '      <div class="item">';


                echo '   <div class="image">';


                echo "    <a name='save_later' class='save_later' href='savelater.php?id={$rowimg['id']}'><i class='fa-regular fa-bookmark fa-2x'></i></a>";
                echo "<a href='play_video.php?id={$rowimg['id']}'>";

                echo "   <img src='../ADMIN/Uploads/Thumbnail/" . $rowimg['thumnail'] . "' alt='Image Not Found'  width='400px'  height='250px' align='center' >";
                echo '        <P> &nbsp; <i class="fa-solid fa-star fa-1x"></i> ' . $rowimg['rating'] . '&nbsp; &nbsp; &nbsp; &nbsp;' . $rowimg['year'] . ' &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ' . $rowimg['duration'] . ' &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;' . $rowimg['type'] . '</P>';

                echo '        <p>';
                echo '           &nbsp; ' . ucwords( $rowimg['title']) .  '   ';
                echo '      </p>';

                echo '      </div>';
                echo '     </a>';
                echo '      </div>';
            }
        } else {
            echo "No images found";
        }
        $_SESSION['data'] = $data;
        ?>




    </div>








    <!-- 3D Slideshow Section -->
    <section id="slideshow" style="background-color: #212529;">
        <div class="entire-content">
            <div class="content-carrousel">
                <?php
                $sqlslideshow = "SELECT * FROM slideshow_thumbnail";

                $rowslideshow = mysqli_query($conn, $sqlslideshow);



             while(   $rowslideshowthumbnail = mysqli_fetch_assoc($rowslideshow))
             {

                echo '              <figure class="shadow">';
                echo '                <div class="card1">';
                echo "   <img src='../ADMIN/Uploads/Thumbnail/" . $rowslideshowthumbnail['thumbnail_sli'] . "' alt='Image Not Found'   align='center' >";

                echo '                 <div class="card-text">';

                echo '                   <P>';
                echo '                   <h4>';
                echo '                 </h4>';
                echo '               </P>';
                echo '                <br><br><br>';
                echo '                <br><br><br>';


                echo "      <a href='play_video.php?id=".$rowslideshowthumbnail['id']."'class='-btn -bg -txt'>Play now</a>";

                echo '            </div>';
                echo '             </div>';
                echo '       </figure>';

            }
                ?>

             
                
            </div>
        </div>
    </section>



    <main style="backgroung-color:#212529;">

        <h2>Categories</h2>
        <div class="Buttons_category">
            <center>
                <form method="post" action="">

                    <button name="type" value="all">
                        all
                    </button>
                    <button name="type" value="action">
                        action
                    </button>

                    <button name="type" value="Science_fiction">
                        Science_fiction
                    </button>
                    <button name="type" value="Horror">
                        Horror
                    </button>
                    <button name="type" value="Drama">
                        Drama
                    </button>
                </form>
            </center>
        </div>

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

        if ($Categories == 'Science_fiction') {

            $im = "SELECT * FROM documentory_detail  where type like '%Science_fiction%' ";
        } elseif ($Categories == 'action') {

            $im = "SELECT * FROM documentory_detail  where type like '%Action%' ";
        } elseif ($Categories == 'Horror') {

            $im = "SELECT * FROM documentory_detail  where type like '%Horror%' ";
        } elseif ($Categories == 'Drama') {

            $im = "SELECT * FROM documentory_detail  where type like '%Drama%' ";
        } else {

            $im = "SELECT * FROM documentory_detail ORDER BY title ASC";
        }

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


    <script src="popup.js"></script>

    <script type="text/javascript">
        const slider2 = document.querySelector('.items');
        let isDown = false;
        let startX;
        let scrollLeft;
        slider2.addEventListener('mousedown', (e) => {
            isDown = true;
            slider2.classList.add('active')
            startX = e.pageX - slider2.offsetLeft;
            scrollLeft = slider2.scrollLeft;
        });
        slider2.addEventListener('mouseleave', () => {
            isDown = false;
            slider2.classList.remove('active')

        });
        slider2.addEventListener('mouseup', () => {
            isDown = false;
            slider2.classList.remove('active')

        });
        slider2.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - slider2.offsetLeft;
            const walk = (x - startX) * 3;
            slider2.scrollLeft = scrollLeft - walk;

        });
        // upper slide bar
        const slider22 = document.querySelector(".slider2");
        const nextBtn = document.querySelector(".next-btn");
        const prevBtn = document.querySelector(".prev-btn");
        const slides = document.querySelectorAll(".slide");
        const slideIcons = document.querySelectorAll(".slide-icon");
        const numberOfSlides = slides.length;
        var slideNumber = 0;

        //image slider2 next button
        nextBtn.addEventListener("click", () => {
            slides.forEach((slide) => {
                slide.classList.remove("active");
            });
            slideIcons.forEach((slideIcon) => {
                slideIcon.classList.remove("active");
            });

            slideNumber++;

            if (slideNumber > (numberOfSlides - 1)) {
                slideNumber = 0;
            }

            slides[slideNumber].classList.add("active");
            slideIcons[slideNumber].classList.add("active");
        });

        //image slider2 previous button
        prevBtn.addEventListener("click", () => {
            slides.forEach((slide) => {
                slide.classList.remove("active");
            });
            slideIcons.forEach((slideIcon) => {
                slideIcon.classList.remove("active");
            });

            slideNumber--;

            if (slideNumber < 0) {
                slideNumber = numberOfSlides - 1;
            }

            slides[slideNumber].classList.add("active");
            slideIcons[slideNumber].classList.add("active");
        });

        //image slider2 autoplay
        var playslider2;

        var repeater = () => {
            playslider2 = setInterval(function() {
                slides.forEach((slide) => {
                    slide.classList.remove("active");
                });
                slideIcons.forEach((slideIcon) => {
                    slideIcon.classList.remove("active");
                });

                slideNumber++;

                if (slideNumber > (numberOfSlides - 1)) {
                    slideNumber = 0;
                }

                slides[slideNumber].classList.add("active");
                slideIcons[slideNumber].classList.add("active");
            }, 4000);
        }
        repeater();

        //stop the image slider2 autoplay on mouseover
        slider2.addEventListener("mouseover", () => {
            clearInterval(playslider2);
        });

        //start the image slider2 autoplay again on mouseout
        slider2.addEventListener("mouseout", () => {
            repeater();
        });
    </script>
    <script>
        let list = document.querySelectorAll(".nav-item");

        function activelink() {
            list.forEach((item) =>

                item.classList.remove('active'));
            this.classList.add('active');


        }

        list.forEach((item) =>
            item.addEventListener('click', activelink))
    </script>
    <?php
    // Check if data was just saved
    if (isset($_POST['save_later'])) {
        // Disable the button
        echo '<script>document.getElementsByName("save_later")[0].disabled = true;</script>';
    }
    ?>


    <?php include("footer.php"); ?>

</body>

</html>