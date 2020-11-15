<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/profile.css">
</head>

<body>

    <?php

    echo '
    <div class="container emp-profile">
            <form action="_editProfile.php?id=' . $_GET['$id'] . '" method="post">
                <div class="row">       
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        ' . $_GET['$fname'] . ' ' . $_GET['$lname'] . '
                                    </h5>
                                    <h6>
                                        Regular Gymer
                                    </h6>
                            <ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <button type="submit" class="profile-edit-btn" name="update" value="Update">Update</button>
                    </div>
                    
                    <div class="col-md-2">
                        <a href="_showMembers.php" class="profile-edit-btn" value="Back">Back</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Username</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>' . $_GET['$username'] . '</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>' . $_GET['$fname'] . $_GET['$lname'] . '</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>' . $_GET['$email'] . '</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>' . $_GET['$mnumber'] . '</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Lives At</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>' . $_GET['$address'] . '</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Description</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>' . $_GET['$desc'] . '</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                            <label>Plan</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>' . $_GET['$plan'] . '</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Payment</label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-row mb-3">
                                                <div class="form-check ml-3">
                                                    <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="Paid">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Paid
                                                    </label>
                                                </div>
                                                <div class="form-check ml-3">
                                                    <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="Not Paid" checked>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Not Paid
                                                    </label>
                                                </div>
                                            </div>  
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-2">
                                            <label>Age: </label>
                                        </div>
                                        <div class="col-md-2">
                                            <p>' . $_GET['$age'] . ';</p>
                                        </div>
                                        <div class="col-md-2">
                                            <label>Weight: </label>
                                        </div>
                                        <div class="col-md-2">
                                            <p>' . $_GET['$weight'] . ';</p>
                                        </div>
                                        <div class="col-md-2">
                                            <label>Height: </label>
                                        </div>
                                        <div class="col-md-2">
                                            <p>' . $_GET['$height'] . ';</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>';
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>