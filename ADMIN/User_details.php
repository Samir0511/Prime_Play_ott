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
    <title>Admin User Detail</title>
    <link rel="icon" href="logo_0005241.ico" type="image/x-icon">
    <link rel="stylesheet" href="sidebar.css?v=<?= $versionn ?>">
    <link rel="stylesheet" href="style.css?v=<?= $versionn ?>">
   
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web\fontawesome-free-6.2.1-web\css/all.min.css?v=<? $version ?>">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web\fontawesome-free-6.2.1-web\css/all.css?v=<? $version ?>">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web\fontawesome-free-6.2.1-web\js/all.min.js?v=<? $version ?>">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web\fontawesome-free-6.2.1-web\js/all.js?v=<? $version ?>">
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
            font-family:'Courier New', Courier, monospace;
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
            <a herf="Homepage.php"class="gradient-text">
              Prime&nbsp;Play
            </a>

            </div>            <i class="fa-solid fa-bars" id="btn"></i>
        </div>
        <ul>

            <li class="list">
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
          
       
            <li class="list active">
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
    
    <section class="home-section">
        <div class="text">

            <div class="main_content">

                <div class="info">
                <div class="doc_detail">
                        <table class="container">
                            <thead>
                                <tr>
                                    <th class="Title" colspan="8">
                                        User Detail
                                    </th>

                                </tr>
                                <tr>
                                <th>
                                        <h1>No</h1>
                                    </th>
                                    <th>
                                        <h1>Name</h1>
                                    </th>
                                    <th>
                                        <h1>Username</h1>
                                    </th>                                 

                                    <th>
                                        <h1>Email</h1>
                                    </th>
                                    <th>
                                        <h1>Mobile</h1>
                                    </th>
                                    <th>
                                        <h1>DOB</h1>
                                    </th>
                                    <th>
                                        <h1>Password</h1>
                                    </th>
                                    <th>
                                        <h1>Operation</h1>
                                    </th>
                                  

                                </tr>
                            </thead>
                            <tbody>
                                <?php

                            

                                    $im = "SELECT * FROM user ";
                                    $val=1;

                                    $detail = mysqli_query($connn, $im);

                                    while ($result = mysqli_fetch_assoc($detail)) {


                                        $no = $result['id'];
                                        $name = $result['name'];
                                        $Username = $result['username'];
                                        $Email = $result['email'];
                                        $Mobile = $result['mobile'];
                                        $gender = $result['gender'];
                                        $password = $result['password'];
                                      
                                        echo "<tr>";

                                        echo " <td align='center'>".$val."</td>";
                                        echo " <td align='center'>" . $name . "</td>";
                                   
                                        echo " <td align='center'>" . $Username . "</td>";
                                        echo " <td align='center'>" . $Email . "</td>";
                                        echo " <td align='center'>" . $Mobile . "</td>";
                                        echo " <td align='center'>" . $gender . "</td>";
                                        echo " <td align='center'>" . $password . "</td>";
                                        echo " <td>
                                        <a href='user_delete.php?id={$result['id']}'><i class='fa-regular fa-trash-can fa-3x'></i></a>
                                    </td>";

                                        echo "</tr>";
                                    $val=$val+1;

                                    }


                     
                               
                                ?>

                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
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
    <script src="script.js"></script>
</body>
</html>