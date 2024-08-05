<?php
session_start();
include('includes/lifecareheadder.php');
include('includes/lifecarenavbar.php');
?>

    <!-- Header-->
    <header class="bg-primary py-5 product-banner-main">

        <div class="container px-4 px-lg-5 my-5 ">
            <div class="text-center text-white ">
                <h1 class="display-4 fw-bolder">Looking For Products</h1>
                <p class="lead fw-normal text-white-50 mb-0">LifeCare Will Provide all the medical <br> products you need.</p>
            </div>

        </div>

    </header>

    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                <?php
                include_once ('dbconfig.php');
                if ($connection) {
                    $query = "select * from nonmedicalproducts";
                    $query_run = mysqli_query($connection, $query);

                } else {
                    echo "db connection issue";
                }

                ?>

                <?php


                if (mysqli_num_rows($query_run) > 0) {

                    while ($row = mysqli_fetch_assoc($query_run)) {

                        ?>

                        <div class="col mb-5">
                            <div class="card shadow-lg h-100">
                                <!-- Sale badge-->
                                <!--<div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>-->
                                <!-- Product image-->
                                <img class="card-img-top img-fluid"  src="uploads/WebProducts/<?php echo $row["proimg"]; ?>"  title="<?php echo $row['proimg']; ?>" />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><?php echo $row ['proname']; ?></h5>
                                        <!-- Product reviews-->

                                        <!-- Product price-->
                                        <span class=" "> <span class="text-black" style="font-weight: bold">Rs</span> <?php echo $row ['proprice']; ?> </span>
                                        <br>
                                        <span class=" "> <span class="text-warning" style="font-weight: bold"> Quantity <?php echo $row ['proquantity']; ?> </span>

                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#" aria-disabled="true"><?php echo $row ['prostatus']; ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <?php
                    }
                }
                else{
                    echo '<div class="alert alert-warning" role="alert"> No Product in the Store for Now ! </div>';
                }
                ?>

            </div>
        </div>

    </section>


   <!-- <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                <?php
/*                include_once ('dbconfig.php');
                if ($connection) {
                    $query = "select * from medicine";
                    $query_run = mysqli_query($connection, $query);

                } else {
                    echo "db connection issue";
                }

                */?>

                <?php
/*

                if (mysqli_num_rows($query_run) > 0) {

                    while ($row = mysqli_fetch_assoc($query_run)) {

                        */?>

                        <div class="col mb-5">
                            <div class="card shadow-lg h-100">

                                <img class="card-img-top img-fluid"  src="uploads/WebProducts/<?php /*echo $row["file"]; */?>"  title="<?php /*echo $row['file']; */?>" />

                                <div class="card-body p-4">
                                    <div class="text-center">

                                        <h5 class="fw-bolder"><?php /*echo $row ['medname']; */?></h5>



                                        <span class=" "> <span class="text-black" style="font-weight: bold">Rs</span> <?php /*echo $row ['medprice']; */?> </span>
                                        <br>
                                        <span class=" "> <span class="text-warning" style="font-weight: bold"> Quantity <?php /*echo $row ['quantity']; */?> </span>

                                    </div>
                                </div>

                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#" aria-disabled="true"><?php /*echo $row ['status']; */?></a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <?php
/*                    }
                }
                else{
                    echo '<div class="alert alert-warning" role="alert"> No Product in the Store for Now ! </div>';
                }
                */?>

            </div>
        </div>

    </section>
-->

<?php
include('includes/lifecarefooter.php');
?>