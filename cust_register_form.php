<?php
include('includes/lifecareheadder.php');
include('includes/lifecarenavbar.php');
?>


    <section class="header-section-01 bg-white" style="height: 100vh">
        <div class="row bg-white">
            <div class="col-lg-6">
                <div class="container title-wrapper">
                    <h1> New Customers Register <br> From Here</h1>

                    <p>If you already have account <a href="cust_login_form.php">login here</a>.</p>
                </div>

                <img src="Assets/img/office-desk-animation.gif" class="img-fluid hedder-img-sty" style="margin:6% auto "
                     alt="Picuture" width="490">

            </div>
            <div class="col-lg-6 alignment">

                <div class="container bg-light oder-form-styles">

                    <h3>Customer Registration</h3>

                    <form action="customer_registration.php" method="post">
                        <div class="mb-3 row">
                            <!-- <label for="name" class="col-sm-2 col-form-label"></label> -->
                            <div class="col-sm-11">
                                <input type="text" class="form-control" required name="cust_name" id="inputname"
                                       placeholder="Name">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <!-- <label for="inputemail" class="col-sm-2 col-form-label">Email</label> -->
                            <div class="col-sm-11">
                                <input type="email" required class="form-control" name="cust_email" id="txtEmail"
                                       placeholder="Email">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <!-- <label for="inputnic" class="col-sm-2 col-form-label">NIC</label> -->
                            <div class="col-sm-11">
                                <input type="text" class="form-control" required name="cust_nic" placeholder="NIC">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <!-- <label for="inputnic" class="col-sm-2 col-form-label">NIC</label> -->
                            <div class="col-sm-11">
                                <input type="date" class="form-control" required name="cust_age"
                                       placeholder="Age">
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <!-- <label for="inputnic" class="col-sm-2 col-form-label">NIC</label> -->
                            <div class="col-sm-11">
                                <input type="text" class="form-control" required name="cust_contact"
                                       placeholder="Phone number">
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <!-- <label for="inputnic" class="col-sm-2 col-form-label">NIC</label> -->
                            <div class="col-sm-11">
                                <input type="text" class="form-control" required name="cust_address"
                                       placeholder="Address">
                            </div>
                        </div>

                        <hr>

                        <div class="mb-3 row">
                            <!-- <label for="inputnic" class="col-sm-2 col-form-label">NIC</label> -->
                            <div class="col-sm-11">
                                <input type="password" class="form-control" required name="cust_password"
                                       placeholder="Password">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <!-- <label for="inputnic" class="col-sm-2 col-form-label">NIC</label> -->
                            <div class="col-sm-11">
                                <input type="password" class="form-control" required name="cust_repassword"
                                       placeholder="Re-Enter Password">
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <!-- <label for="inputnic" class="col-sm-2 col-form-label">NIC</label> -->
                            <div class="col-sm-11">

                                <button type="submit" class="sumbit-btn btn btn-primary mx-auto" name="btn_register"
                                placeholder="Address">Register</button>

                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </section>

<?php
include('includes/lifecarefooter.php');
?>