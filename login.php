<?php
include('includes/header.php');
?>
    <script src="js/checkLoin.js"></script>

<!--for admins or employees-->

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Management Login</h1>
                                    </div>

                                    <form class="user" action="checkLogin.php" name="adminLogin" method="POST">
                                        <div class="form-group">
                                            <input type="email" name="adminUsername" id="username"
                                                   class="form-control form-control-user"
                                                   placeholder="Email">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="adminPassword" id="password" class="form-control form-control-user" placeholder="Password">
                                        </div>

                                        <input type="submit" onclick="" name="login_btn" value="Login" class="btn btn-primary btn-user btn-block">
                                        <hr>
                                        <!--<img src="Assets/img/footerBG.jpg" alt="" class="img-fluid">-->
                                    </form>



                                        <div class="col-auto">
                                            <a href="index.php" class="btn btn-danger">Back</a>
                                        </div>





                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="js/validatelogin.js"></script>

<?php
include('includes/scripts.php');
?>