<?php
$showError = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_dbconnect.php';
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mnumber = $_POST['mnumber'];
    $age = $_POST['age'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $add = $_POST['add'];
    $desc = $_POST['desc'];
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $hash = password_hash($password,PASSWORD_DEFAULT);
    $plan = $_POST['plan'];

    $Sql = "INSERT INTO `users` (`fname`, `lname`, `email`, `mnumber`, `age`, `weight`, `height`, `address`, `desc`, `username`, `password`, `plan`, `roll`, `dt`) VALUES ('$fname', '$lname', '$email', '$mnumber', '$age', '$weight', '$height', '$add', '$desc', '$username', '$hash', '$plan', '0', 'current_timestamp()')";
    $result = mysqli_query($conn, $Sql);
    if ($result) {
        $showError = false;
    }
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

    <title>Add new member</title>
</head>

<body>

    <?php
    echo '<div class="jumbotron jumbotron-fluid mb-0">
        <div class="container">
            <h1 class="display-4 font-weight-bold font-italic">Adding New Member</h1>
            <a href="/adminGym/profile.php" class="btn btn-outline-success float-right">Back</a>
        </div>
        </div>';

    if ($showError == false) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Member registered succesfully.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
    ?>

    <form class="needs-validation container my-4" novalidate action="_addMember.php" method="post">

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="fname">First name</label>
                <input type="text" class="form-control" id="fname" name="fname" placeholder="First name" required>
                <div class="invalid-tooltip">
                    Please enter first name!
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="lname">Last name</label>
                <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name" required>
                <div class="invalid-tooltip">
                    Please enter last name!
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                <div class="invalid-tooltip">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="mnumber">Mobile Number</label>
                <input type="tel" class="form-control" id="mnumber" name="mnumber" placeholder="Mobile Number" required>
                <div class="invalid-tooltip">
                    Please provide a valid city.
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="age">Age</label>
                <input type="text" class="form-control" id="age" name="age" placeholder="Age" required>
                <div class="invalid-tooltip">
                    Please provide a valid Age.
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="weight">Weight</label>
                <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight" required>
                <div class="invalid-tooltip">
                    Please provide a valid weight.
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="height">Height</label>
                <input type="text" class="form-control" id="height" name="height" placeholder="Height" required>
                <div class="invalid-tooltip">
                    Please provide a valid height.
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="add">Address</label>
                <input type="text" class="form-control" id="add" name="add" placeholder="Address" required>
                <div class="invalid-tooltip">
                    Please enter address!
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="desc">Description</label>
                <input type="text" class="form-control" id="desc" name="desc" placeholder="Please enter about your self">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="username">Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                    </div>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                        Please choose a unique and valid username.
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="pass">Password</label>
                <input type="text" class="form-control" id="pass" name="pass" placeholder="Password" required>
                <div class="invalid-tooltip">
                    Please enter password!
                </div>
            </div>
        </div>

        <div class="form-row mb-3">
            <div class="form-check ml-3">
                <input class="form-check-input" type="radio" name="plan" id="exampleRadios1" value="300rs" checked>
                <label class="form-check-label" for="exampleRadios1">
                    300 ₹ per month
                </label>
            </div>
            <div class="form-check ml-3">
                <input class="form-check-input" type="radio" name="plan" id="exampleRadios2" value="600rs">
                <label class="form-check-label" for="exampleRadios2">
                    600 ₹ for 3 month
                </label>
            </div>
            <div class="form-check ml-3">
                <input class="form-check-input" type="radio" name="plan" id="exampleRadios3" value="3000rs">
                <label class="form-check-label" for="exampleRadios3">
                    3000 ₹ per year
                </label>
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Add Member</button>
    </form>

    <?php include '_footer.php'; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>