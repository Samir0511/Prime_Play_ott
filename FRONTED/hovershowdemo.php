<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

.card {
  position: relative;
  width: 300px;
  height: 200px;
  overflow: hidden;
}

.card img {
  width: 100%;
  height: 100%;
}

.card-text {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: rgba(0, 0, 0, 0.5);
  color: white;
  padding: 10px;
  display: none;
}

.card:hover .card-text {
  display: block;
}

.card-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.5);
  color: white;
  text-align: center;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.card:hover .card-overlay {
  opacity: 1;
}

    </style>
</head>
<body>
<div class="card">
  <img src="your_image_source" alt="">
  <p class="card-text">This is some card text</p>
  <div class="card-overlay">
    <p>Hover over me</p>
  </div>
</div>



</body>
</html>