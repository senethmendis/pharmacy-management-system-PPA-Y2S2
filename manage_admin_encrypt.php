<?php
include ('includes/session_start.php');
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
                                    <h1 class="h4 text-gray-900 mb-4">Enter Master Key</h1>
                                    <p class="text-danger">Only authorized personals can access this page !</p>
                                </div>

                                <form class="user" action="master_key_check.php" name="adminLogin" method="POST">

                                    <div class="form-group">
                                        <input type="password" name="masterkey" id="password" class="form-control form-control-user" placeholder="Enter Master Key">
                                    </div>

                                    <input type="submit" onclick="" name="masterkey_btn" value="Enter" class="btn btn-primary btn-user btn-block">
                                    <hr>

                                </form>

                                <a href="dash.php" class="btn btn-danger m-auto">Back</a>



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
