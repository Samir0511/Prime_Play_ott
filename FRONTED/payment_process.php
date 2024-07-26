
<?php

include 'config.php';

include 'connection.php';
session_start();



$sql2 = "SELECT *  FROM pricing";
$result2 = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result2) > 0) {
    // Fetch the most recent record
    $row2 = mysqli_fetch_assoc($result2);

    // Use the data in your code
} 

$pay_id=$_GET['id'];
$_SESSION["pay_id"]=$pay_id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
    body {
  background-image: linear-gradient(-90deg, #E6E2AF 0%, #002F2F 100%);
  font-weight: bolder;
}

.component {
  position: relative;
  width: 30%;
  margin: 5rem auto;
  padding: 1rem;

  box-shadow: 2px 2px 10px #454545;
  background-color: #FFFFFF;
  
  text-align: center;
}

.credit-card h2 {
  color: rgba(4,99,128,1);
  font-weight: bolder;
  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

}

.component .credit-card form {
  display:flex;
  flex-direction: column;
}

.component .credit-card .line {
  display: flex;
}

.component .credit-card .line input {
  width: 20%; /* on définit une taille plus petite qu'il le faut, le flex-grow fera le reste */
  flex: 1;
  margin: 0.4rem 0.3rem;
}

input {
	border: none;
	border-bottom: 1px solid rgba(0,0,0,.12);
	margin: 1rem 0;
	padding: 4px;
	font-size: 1rem;
	outline: none;
}

input::-webkit-input-placeholder {
	color: #AAAAAA;
}

.valid-button {
	border: 0;
	padding: 1rem 2rem;
	background-color: rgba(4,99,128,0.9);
	color: #EFECCA;
	font-weight:bold;
	margin-top:2rem;
  box-shadow: 1px 1px 1px black;
}

.valid-button:hover {
  background-color: rgba(4,99,128,1);
  box-shadow: none;
}

.total {
  position: absolute;
  top: 3em;
  left: -8em;
  z-index: -1;
  
  background: #002F2F;
  color: #A7A37E;
  
  width: 100px;
  transform: rotate(-35deg);
  display:flex;
  flex-wrap: wrap;
  justify-content:center;
  align-items:center;
  padding-right: 2rem;
  
  box-shadow: 1px 1px 5px black;
}

.total p {
  font-size: 1.5rem;
}
</style>
</head>
<body>
    <?php include('header.php');?>
<form action="fatch.php" method="POST">
    <section class="component">

  <div class="credit-card">
    <h2>Credit card</h2>
    <form>
        <br>
        <br>
      <input type="text" placeholder="NAME" required/>
      <div class="line"> <input type="text" placeholder="NUMBER" required/> </div>
      <div class="line">
        <input class="litle" type="text" placeholder="EXPIRY" required/>
        <input class="tall" type="text" placeholder="CCV" required/>
      </div>

      <button type="submit" class="valid-button">PROCEED TO CHECKOUT</button>
    </form>
  </div>
</section>
</form>

</body>
</html>