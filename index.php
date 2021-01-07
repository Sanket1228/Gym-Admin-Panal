<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	include 'partials/_dbconnect.php';
	$username = $_POST['username'];
	$password = $_POST['pass'];

	$Sql = "Select * from `users` where username = '$username'";
	$result = mysqli_query($conn, $Sql);
	$numRows = mysqli_num_rows($result);
	if ($numRows == 1) {
		while ($row = mysqli_fetch_assoc($result)) {
			if ($row['password'] == password_verify($password, $row['password'])) {
				session_start();
				$_SESSION['loggedin'] = true;
				$_SESSION['roll'] = $row['roll'];
				$_SESSION['id'] = $row['user_id'];
				$_SESSION['username'] = $row['username'];
				$_SESSION['fname'] = $row['fname'];
				$_SESSION['lname'] = $row['lname'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['mnumber'] = $row['mnumber'];
				$_SESSION['age'] = $row['age'];
				$_SESSION['weight'] = $row['weight'];
				$_SESSION['height'] = $row['height'];
				$_SESSION['address'] = $row['address'];
				$_SESSION['desc'] = $row['desc'];
				$_SESSION['plan'] = $row['plan'];
				$_SESSION['payment'] = $row['payment'];
				header("Location: /adminGym/profile.php?succesfullLogin=true");
				exit();
			} else {
				$loginError = "Passwords do not match";
				header("Location: /adminGym/index.php?succesfullLogin=false&error=$loginError");
				exit();
			}
		}
	}
	$loginError = "No user found";
	header("Location: /adminGym/index.php?succesfullLogin=false&error=$loginError");
	exit();
}


?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&family=Merriweather:ital,wght@1,300&family=Oswald&family=Redressed&display=swap" rel="stylesheet">

	<title>Welcome - Global Gym Center</title>
</head>

<body style="font-family: Lora, serif;"> 

	<?php
	if (isset($_GET['succesfullLogin']) && $_GET['succesfullLogin'] == "false") {
		echo '<div class="alert alert-warning alert-dismissible fade show my-0" role="alert">
					<strong>Error! </strong>' . $_GET["error"] . '
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>';
	}
	?>


	<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
		<div class="container">
			<a class="navbar-brand" href="#" style="font-family: Lora, serif;">Global Gym Center</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<form class="form-inline my-2 my-lg-0 ml-auto" action="/adminGym/index.php" method="POST">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">@</span>
						</div>
						<input type="text" class="form-control" placeholder="Username" name="username" aria-label="Username" aria-describedby="basic-addon1">
					</div>
					<input class="form-control mr-sm-2 ml-2" type="password" placeholder="Password" name="pass" aria-label="password">
					<button class="btn btn-outline-success ml-2" style="font-family: Lora, serif;">Login</button>
				</form>
			</div>
		</div>
	</nav>

	</form>
	</div>
	</div>
	</div>

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="first-slide" src="images/sliders/slide1.jpg" alt="First slide">
				<div class="container">
					<div class="carousel-caption">
						<h1 style="font-family: Lora, serif;">Welcome to Global Gym Center</h1>
						<h4 style="font-family: Redressed, cursive;">Lets burn some calories</h4>
						<p><a class="btn btn-lg btn-warning" href="Tel: 32434131" role="button" >Call Us Now</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	

	<?php include 'partials/_facilities.php'; ?>

	

	<?php include 'partials/_about.php'; ?>

	

	<?php include 'partials/_packages.php'; ?>

	<?php include 'partials/_footer.php'; ?>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>