<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "home";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT title, views FROM movies";
$result = mysqli_query($conn, $sql);

$labels = array(); // array to store the labels for the x-axis
$data = array(); // array to store the data for the y-axis


while($row = mysqli_fetch_assoc($result)) {
    $labels[] = $row["title"];
    $data[] = $row["views"];
  }
  
?>

  <!DOCTYPE html>
  <html>
  <head>
    <title>Dynamic Bar Chart</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
  </head>
  <body>
    <canvas id="myChart"></canvas>
    <script>
      
        var colors = ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF'];

      var ctx = document.getElementById('myChart').getContext('2d');
      var chart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: <?php echo json_encode($labels); ?>,
          datasets: [{
            label: 'views',
            data: <?php echo json_encode($data); ?>,
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          }
        }
      }); 
    </script>
  </body>
  </html>
  

