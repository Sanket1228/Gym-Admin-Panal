<?php

    echo '
    <div class"background_profile">
    <div class="container emp-profile" id="Profile">
                <div class="row border-bottom">       
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        ' . $_SESSION['fname'] . ' ' . $_SESSION['lname'] . '
                                    </h5>
                                    <h6>
                                        Regular Gymer
                                    </h6>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Username</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>' . $_SESSION['username'] . '</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>' . $_SESSION['fname'] . $_SESSION['lname'] . '</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>' . $_SESSION['email'] . '</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>' . $_SESSION['mnumber'] . '</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Lives At</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>' . $_SESSION['address'] . '</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Description</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>' . $_SESSION['desc'] . '</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                            <label>Plan</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>' . $_SESSION['plan'] . '</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Payment</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>' . $_SESSION['payment'] . '</p>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-2">
                                            <label>Age: </label>
                                        </div>
                                        <div class="col-md-2">
                                            <p>' . $_SESSION['age'] . ';</p>
                                        </div>
                                        <div class="col-md-2">
                                            <label>Weight: </label>
                                        </div>
                                        <div class="col-md-2">
                                            <p>' . $_SESSION['weight'] . ';</p>
                                        </div>
                                        <div class="col-md-2">
                                            <label>Height: </label>
                                        </div>
                                        <div class="col-md-2">
                                            <p>' . $_SESSION['height'] . ';</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>       
        </div>
        </div>';
    ?>