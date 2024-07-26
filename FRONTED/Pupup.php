
<?php



include 'config.php';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Automatic Popup</title>
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!--Stylesheets-->
    <link rel="stylesheet" href="popup.css?v=<?= $version ?>">
</head>
<body>
    <div class="popup">
        <button id="close">&times;</button>
        <h2>This Is The Title</h2>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita distinctio fugiat alias iure qui, commodi minima magni ullam aliquam dignissimos?
        </p>
        <a href="#">Let's Go</a>
    </div>
    <!--Script-->
    <script src="popup.js"></script>
</body>
</html>