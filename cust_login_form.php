<?php

include('includes/lifecareheadder.php');
include('includes/lifecarenavbar.php');
?>



    <section class="bg-light header-section-01" style="height: 100vh">


        <div class="row">
            <div class="col-lg-6">
                <div class="container title-wrapper">
                    <h1> Customers Login <br> From Here</h1>


                </div>

                <img src="Assets/img/custlgoin.gif" class="img-fluid hedder-img-sty"
                     style="margin:6% auto "
                     alt="Picuture" width="490">

            </div>
            <div class="col-lg-6">

                <div class="container bg-light oder-form-styles justify-content-center"
                     style="display: flex; flex-direction: column; justify-content: center;">

                    <h3 class="text-lg-center">Login</h3>

                    <form action="customer_login.php" method="post">

                        <div class="mb-3 row">
                            <!-- <label for="inputemail" class="col-sm-2 col-form-label">Email</label> -->
                            <div class="col">
                                <input type="email" required class="form-control" name="email" id="txtEmail"
                                       placeholder="Email">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <!-- <label for="name" class="col-sm-2 col-form-label"></label> -->
                            <div class="col">
                                <input type="password" class="form-control" required name="password" id="inputname"
                                       placeholder="Password">
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <!-- <label for="inputnic" class="col-sm-2 col-form-label">NIC</label> -->
                            <div class="col">

                                <input type="submit" class="sumbit-btn btn btn-primary mx-auto" name="btn_login"
                                       value="Login">
                            </div>
                        </div>
                    </form>

                    <p class="text-center m-4">
                        If you don't have account <br> <a href="cust_register_form.php">Register
                            here</a>
                    </p>

                </div>
            </div>
        </div>
    </section>

<?php
include('includes/lifecarefooter.php');
?>