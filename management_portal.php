<?php
include ('includes/session_start.php');
include('Includes/emp_headder.php');
include('Includes/emp_nabvar.php');
?>

<div class="container-fluid">
    <div class="row shadow-lg herobanner mt-3 mb-4 rounded-3 align-content-center">
        <div class="col-lg-6 custom-aliment ml-4  text-left">
            <h1>All the Management Tools <br> for <br> Better Management </h1> <br>

            <div class="col-auto">
                <h5>  <a class="btn btn-primary" href="invoiceSystem/index.php"> <i class="fas fa-cash-register mr-4"></i> Go to Cashier System </a></h5> <br>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="container-fluid">
                <img class="img-fluid" src="Assets/img/managentportal.gif" alt="">
            </div>
        </div>
    </div>

    <div class="row mb-5">

        <div class="col-lg-4">
            <div class="card bg-dark shadow-lg mb-4">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2 p-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Cashire System</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="col-auto">

                                        <a class="text-primary" aria-current="page" href="invoiceSystem/index.php"> Go to </a>

                                    </div>
                                    <div class="col-auto">
                                        <!--<span class="text-warning"> 5656</span>-->
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card bg-dark shadow-lg">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2 p-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Medicine</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">

                                    <div class="col-auto">

                                        <a href="medicineManager.php">Go to Page</a>

                                    </div>


                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card bg-dark shadow-lg">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2 p-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">WEB STORE</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">

                                    <div class="col-auto">

                                        <a href="emp_web_store_manager.php">Go to Page</a>

                                    </div>
                                    <div class="col-auto">
                                        <!--<span class="text-warning"> 5656</span>-->
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card bg-dark shadow-lg">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2 p-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Stock</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="col-auto">

                                        <a href="medicineManager.php">Go to Page</a>

                                    </div>
                                    <div class="col-auto">
                                        <!--<span class="text-warning"> 5656</span>-->
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>





    </div>
</div>


<?php
include('Includes/emp_footer.php');
?>
