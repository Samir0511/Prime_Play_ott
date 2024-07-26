
<?php

include 'config.php';
include 'connection.php';
session_start();

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>prime play</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" href="logo_0005241.ico" type="image/x-icon">

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            font-family: Helvetica, sans-serif;
        }

        body {
            background: #25303B;
        }

        section#timeline {
            width: 80%;
            margin: 20px auto;
            position: relative;
        }

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

        section#timeline:before {
            content: '';
            display: block;
            position: absolute;
            left: 50%;
            top: 0;
            margin: 0 0 0 -1px;
            width: 2px;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
        }

        .video-player {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .video-player::-webkit-media-controls {
            display: none !important;
        }

        .video-player::--webkit-media-controls-play-button {
            display: none !important;
        }

        .video-player::--webkit-media-controls-start-playback-button {
            display: none !important;
        }

        .video-player::--webkit-media-controls-current-time-display {
            font-family: sans-serif;
            font-size: 14px;
            color: #fff;
            padding: 6px;
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            bottom: 0;
            left: 0;
        }

        .video-player::--webkit-media-controls-time-remaining-display {
            font-family: sans-serif;
            font-size: 14px;
            color: #fff;
            padding: 6px;
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            bottom: 0;
            right: 0;
        }

        .video-player:hover::-webkit-media-controls {
            display: flex !important;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 50px;
            left: 0;
            right: 0;
            margin: 0;
        }

        .video-player:hover::-webkit-media-controls-time-remaining-display {
            display: none !important;
        }

        section#timeline article {
            width: 100%;
            margin: 0 0 20px 0;
            position: relative;
        }

        section#timeline article:after {
            content: '';
            display: block;
            clear: both;
        }

        section#timeline article div.inner {
            width: 40%;
            float: left;
            margin: 5px 0 0 0;
            border-radius: 6px;
            
        }

        section#timeline article div.inner span.date {
            display: block;
            width: 60px;
            height: 50px;
            padding: 5px 0;
            position: absolute;
            top: 0;
            left: 50%;
            margin: 0 0 0 -32px;
            border-radius: 100%;
            font-size: 12px;
            font-weight: 900;
            text-transform: uppercase;
            background: #25303B;
            color: rgba(255, 255, 255, 0.5);
            border: 2px solid white;
            box-shadow: 0 0 0 7px #25303B;

        }
        section#timeline article div.inner span.date:hover {
            transition: all 0.3s ease-in-out;
   
            border: 2px solid darkorange;
        }

        section#timeline article div.inner span.date span {
            display: block;
            text-align: center;
            
        }

        section#timeline article div.inner span.date span.day {
            font-size: 26px;
            text-align: center;
            transition: all 0.3s ease-in-out;

        }
        section#timeline article div.inner span.date span.day:hover {
            font-size: 33px;
            text-align: center;
            color: white;


        }
        section#timeline article div.inner span.date span.month {
            font-size: 18px;
        }

        section#timeline article div.inner span.date span.year {
            font-size: 10px;
        }

        section#timeline article div.inner h2 {
            padding: 15px;
            margin: 0;
            color: #fff;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: -1px;
            border-radius: 6px 6px 0 0;
            position: relative;
        }

        section#timeline article div.inner h2:after {
            content: '';
            position: absolute;
            top: 20px;
            right: -5px;
            width: 10px;
            height: 10px;
            -webkit-transform: rotate(-45deg);
        }

        section#timeline article div.inner p {
            padding: 15px;
            margin: 0;
            font-size: 14px;
            background: #fff;
            color: #656565;
            border-radius: 0 0 6px 6px;
        }

        section#timeline article:nth-child(2n+2) div.inner {
            float: right;
        }

        section#timeline article:nth-child(2n+2) div.inner h2:after {
            left: -5px;
        }

        section#timeline article:nth-child(1) div.inner h2 {
            background: #e74c3c;
        }

        section#timeline article:nth-child(1) div.inner h2:after {
            background: #e74c3c;
        }

        section#timeline article:nth-child(2) div.inner h2 {
            background: #2ecc71;
        }

        section#timeline article:nth-child(2) div.inner h2:after {
            background: #2ecc71;
        }

        section#timeline article:nth-child(3) div.inner h2 {
            background: #e67e22;
        }

        section#timeline article:nth-child(3) div.inner h2:after {
            background: #e67e22;
        }

        section#timeline article:nth-child(4) div.inner h2 {
            background: #1abc9c;
        }

        section#timeline article:nth-child(4) div.inner h2:after {
            background: #1abc9c;
        }

        section#timeline article:nth-child(5) div.inner h2 {
            background: #9b59b6;
        }

        section#timeline article:nth-child(5) div.inner h2:after {
            background: #9b59b6;
        }


        section#timeline article:nth-child(6) div.inner .date {


            display: block;
            width: 160px;
            height: 50px;
            padding: 5px 0;
            position: absolute;
            top: 0;
            left: 46%;
            margin: 0 0 0 -32px;
            border-radius: 17px;
            font-size: 12px;
            font-weight: 900;
            text-transform: uppercase;
            background: #25303B;
            color: rgba(255, 255, 255, 0.5);
            border: 2px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 0 0 7px #25303B;
            background-color: #656565;
            transition: all 0.2s ease-in-out;
        }


        section#timeline article:nth-child(6) div.inner .date:hover {


            transform: scale(1.2);
            background-color: red;
        }

        section#timeline article:nth-child(6) div.inner .date:after {
            background: #e74c3c;
        }

        .video-container {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 56.25%;
        }

        img {
            border-radius: 12px;
            max-width: 100%;
            height: auto;
        }

        .round-button {
            display: inline-block;
            border-radius: 00%;
            background-color: #4CAF50;
            color: white;
            width: 100%;
            height: 100%;
            top: 50%;
            left: 50%;
            transform: translate(0%, 30%);
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            background-color: transparent;
            text-decoration: none;

        }
.round-button:hover{

    color: white;
}
.date i{

    font-size: 25px;
    color: yellow;
    transition: all 0.3s ease-in-out;

}

.date i:hover{

    color: darkgoldenrod;

    
}
    </style>
</head>

<body>


    <?php include("header.php");

    ?>


    <section id="timeline">
    <?php

                            

$im = "SELECT * FROM about ";

$detail = mysqli_query($conn, $im);
$arra = array();
while ($result = mysqli_fetch_assoc($detail)) {






    $text1 = $result['text1'];

    $text2 = $result['text2'];
    $text3 = $result['text3'];
    $name1 = $result['name1'];
    $name2 = $result['name2'];
    $img1 = $result['img1'];
    $img2 = $result['img2'];


    $video1 = $result['video1'];
    $video2 = $result['video2'];
    $video3 = $result['video3'];


    $about1 = $result['about1'];

    $about2 = $result['about2'];
    
    $title1 = $result['title1'];
    
    $title2 = $result['title2'];
    
    $title3 = $result['title3'];








}
?>

        <article>
            <div class="inner">
                <span class="date">
                    <span class="day">1</span>

                </span>
                <h2>
                    <div class="video-container">

                        <video class="video-player" autoplay loop muted >
                            <source src="../ADMIN/Uploads/about/<?php echo $video1;  ?>" type="video/mp4">

                        </video>
                    </div>
                   
                   <?php echo $title1;?>

                </h2>
                <P>
                   <?php echo $text1;?>
                </P>
            </div>
        </article>
        <article>
            <div class="inner">
                <span class="date">
                    <span class="day">2</span>

                </span>
                <h2>

                    <div class="video-container">
                        <video class="video-player" autoplay loop muted>
                        <source src="../ADMIN/Uploads/about/<?php echo $video2;  ?>" type="video/mp4">

                        </video>
                    </div>
                    <?php echo $title2;?>
                </h2>
                <p><?php echo $text2;?>
                </p>
            </div>
        </article>
        <article>
            <div class="inner">
                <span class="date">
                    <span class="day">3</span>

                </span>
                <h2>

                    <div class="video-container">
                        <video class="video-player" autoplay loop muted>
                        <source src="../ADMIN/Uploads/about/<?php echo $video3;  ?>" type="video/mp4">

                        </video>

                    </div>
                    <?php echo $title3;?>
                </h2>
                <p><?php echo $text3;?>
                </p>
            </div>
        </article>
 


        <article>
            <div class="inner">
                <span class="date">
                    <a class="round-button" href="index.php">Enjoy &nbsp;&nbsp;</a>
                </span>

            </div>
        </article>
    </section>



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
    </script>
    <br><br><br>
    <?php include("footer.php"); ?>

</body>

</html>