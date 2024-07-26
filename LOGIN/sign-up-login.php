<?php

include 'connection.php';
include 'config.php';


?>

<?php

if (isset($_POST['submit'])) {
	include 'fetcher.php' or die("not includeed");
}
?>
<?php

if (isset($_POST['submit'])) {
	include 'fetcher.php' or die("not includeed");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Sign-up/Login</title>
	<link rel="icon" href="logo_0005241.ico" type="image/x-icon">
	<link rel="stylesheet" href="style_login.css?v=<?= $version ?>">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
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
	</style>
</head>


<body class="gradient">
	<div id="loader-overlay">
		<video id="loader-video" autoplay loop muted transparent>
			<source src="logo_2chicxulub-impact-event-.mp4" type="video/mp4">
		</video>
	</div>
	<div class="main ">
		<input type="checkbox" id="chk" aria-hidden="true">

		<div class="signup">
			<form class="form1" action="fetcher.php" method="post">


				<label for="chk" aria-hidden="true">Sign up</label>
				<table border="0">

					<tr>
						<td colspan="2" align="right" style="padding-left :75px;">
							<input type="text" name="name" placeholder="Your name*" required="">

						</td>
						<td colspan="2" style="padding-right :65px;">
							<input type="text" name="username" placeholder="Username*" required="">

						</td>
					</tr>
					<tr>
						<td colspan="4">
							<input type="email" name="email" placeholder="Email*" required="">

						</td>
					</tr>
					<tr>
						<td colspan="4">
							<input type="text" name="mobile" placeholder="mobile*" required="">

						</td>
					</tr>
					<tr>
						<td width="20%" align="right" style="padding-left :95px;">
							Gender
						</td>


						<TD align="right" style="float: right;" class="gender">
							Male
							<input type="radio" id="red" name="gender" value="male" required="">

						</TD>
						<TD>
							Female
							<input type="radio" id="red" name="gender" value="female" required="">

						</TD>



					</tr>


					<tr>
						<td colspan="4">
							<input type="password" name="password" placeholder="Password*" required="">
						</td>
					</tr>
					<tr>
						<td colspan="4"> <input type="password" name="confirm_password" placeholder="Confirm Password*" required="">

						</td>
					</tr>
					<tr>
						<td colspan="4" align="center">

							<input type="submit" class="submit" value="Sign in" />
						</td>
					</tr>
				</table>
			</form>
		</div>

		<div class="login">
			<form action="fetcher_Login.php" method="post">
				<label for="chk" aria-hidden="true">Login</label>
				<input type="text" name="email_login" placeholder="Username*" required="">
				<input type="password" name="password_login" placeholder="Password*" required="">
				<input type="submit" id="sub1" class="submit" value="login" />

			</form>
		</div>
	</div>
	<script>
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

</body>




</html>