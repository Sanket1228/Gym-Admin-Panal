<?php
session_start();

if (empty($_SESSION)) {
    header('location:index.php');
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

    <link rel="stylesheet" href="../css/profile.css">

    <title>Welcome - Global Gym Center</title>
</head>

<body style="font-family: Lora, serif;">
    <?php include 'partials/_header.php'; ?>

    <?php
    echo '<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="images/sliders/slide1.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 style="font-family: Lora, serif;">Welcome , ' . $_SESSION['fname'] . '</h1>
                        <h5 style="font-family: Redressed, cursive;">You can see your profile here....</h5>
                        <p><a class="btn btn-lg btn-warning" href="Tel: 32434131" role="button">Call Us Now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>';
    ?>

    <?php
    echo '<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4" style="font-family: Lora, serif;"> Welcome , ' . $_SESSION['fname'] . ' ' . $_SESSION['lname'] . ' </h1>
        <!-- <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p> -->
    </div>
</div>';
    ?>

    <?php include 'partials/_detailUser.php'; ?>

    <?php include 'partials/_about.php'; ?>

    <?php include 'partials/_footer.php'; ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>