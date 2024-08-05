<?php
include ('includes/session_start.php');
include('Includes/emp_headder.php');
include('Includes/emp_nabvar.php');
?>

    <div class="container-fluid m-2">
        <div class="row ml-3">
            <div class="col">
                <h3 class="m-lg common-margins">Summery of the Inventory</h3>
            </div>
        </div>

        <div class="row bg pt-2 pb-2  m-2 rounded-3">
            <div class="col-lg-12">
                <div class="row ">
                    <!--<div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4> Suppliers &nbsp <i class="fas fa-ambulance"></i></h4>
                    </div>

                    <?php
                    /*                    include('dbconfig.php');

                                        if ($connection) {
                                            $query = "select * from supplier";
                                            $query_run = mysqli_query($connection, $query);
                                        } else {
                                            echo "db connection issue";
                                        }
                                        */?>

                    <style>
                        .table-earnings {
                            background: #F3F5F6;
                        }

                        table {
                            display: block;
                            height: 200px;
                            overflow-y: auto;
                        }
                    </style>

                    <table class="table table-hover table-bordered" id="dataTable">
                        <thead>
                        <tr>
                            <th> ID</th>
                            <th> Name</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                    /*                        if (mysqli_num_rows($query_run) > 0) {

                                                while ($data = mysqli_fetch_assoc($query_run)) {
                                                    */?>
                                <tr>
                                    <td> <?php /*echo $data ['Sup_id']; */?> </td>
                                    <td> <?php /*echo $data ['CompanyName']; */?> </td>
                                </tr>
                                <?php
                    /*                            }
                                            } else {
                                                echo '<div class="alert alert-warning" role="alert">Data Not Found !</div>';
                                            }
                                            */?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
-->
                    <div class="col-lg-6 ">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>Orders  &nbsp <i class="fas fa-ambulance"></i></h4>
                                </div>

                                <?php
                                include('dbconfig.php');

                                if ($connection) {
                                    $query = "select * from orders";
                                    $query_run = mysqli_query($connection, $query);
                                } else {
                                    echo "db connection issue";
                                }
                                ?>
                                <style>
                                    .table-earnings {
                                        background: #F3F5F6;
                                    }

                                    table {
                                        display: block;
                                        height: 200px;
                                        overflow-y: auto;
                                    }
                                </style>

                                <table class="table table-hover table-bordered" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th> ID</th>
                                        <th> Order Date</th>
                                        <th> Name</th>
                                        <th> Email</th>
                                        <th> NIc</th>
                                        <th> Contact</th>
                                        <th> Description</th>
                                        <th> Img</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                    if (mysqli_num_rows($query_run) > 0) {

                                        while ($data = mysqli_fetch_assoc($query_run)) {
                                            ?>
                                            <tr>
                                                <td> <?php echo $data ['order_id']; ?> </td>
                                                <td> <?php echo $data ['order_date']; ?> </td>
                                                <td> <?php echo $data ['order_name']; ?> </td>
                                                <td> <?php echo $data ['order_email']; ?> </td>
                                                <td> <?php echo $data ['order_nic']; ?> </td>
                                                <td> <?php echo $data ['order_contact']; ?> </td>
                                                <td> <?php echo $data ['order_disc']; ?> </td>
                                                <td><img src="uploads/PrescriptionOrders/<?php echo $data ['order_img']; ?>" width="100px" alt=""> </td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        echo '<div class="alert alert-warning" role="alert">Data Not Found !</div>';
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card mb-3 shadow-lg">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>Medicine &nbsp <i class="fas fa-prescription-bottle-alt"></i></h4>
                                </div>

                                <!-------------------------------------------------->
                                <?php
                                if ($connection) {
                                    $query = "select * from medicine";
                                    $query_run = mysqli_query($connection, $query);

                                } else {
                                    echo '<div class="alert alert-warning" role="alert">Database Issues !</div>';
                                }
                                ?>

                                <style>
                                    .table-earnings {
                                        background: #F3F5F6;
                                    }

                                    table {
                                        display: block;
                                        height: 200px;
                                        overflow-y: auto;
                                    }
                                </style>
                                <table class="table table-hover table-bordered" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th scope="col">Medicine ID</th>
                                        <th scope="col">Medicine Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Medicine Category</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Manufacture</th>
                                        <th scope="col">Expire Date</th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    <?php
                                    if (mysqli_num_rows($query_run) > 0) {

                                        while ($Meddata = mysqli_fetch_assoc($query_run)) {

                                            ?>
                                            <tr>
                                                <td> <?php echo $Meddata ['medid']; ?> </td>
                                                <td> <?php echo $Meddata ['medname']; ?> </td>
                                                <td><p class="d-inline">Rs</p> <?php echo $Meddata ['medprice']; ?>    </td>
                                                <td> <?php echo $Meddata ['medcategory']; ?> </td>
                                                <td> <?php echo $Meddata ['quantity']; ?> </td>
                                                <td> <?php echo $Meddata ['manufacture']; ?> </td>
                                                <td> <?php echo $Meddata ['expirydate']; ?> </td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        echo '<div class="alert alert-warning" role="alert">Data Not Found !</div>';
                                    }
                                    ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>Invoice &nbsp <i class="fas fa-prescription-bottle-alt"></i></h4>
                                </div>

                                <!-------------------------------------------------->
                                <?php
                                if ($connection) {
                                    $query = "select * from medicine";
                                    $query_run = mysqli_query($connection, $query);

                                } else {
                                    echo '<div class="alert alert-warning" role="alert">Database Issues !</div>';
                                }
                                ?>

                                <style>
                                    .table-earnings {
                                        background: #F3F5F6;
                                    }

                                    table {
                                        display: block;
                                        height: 200px;
                                        overflow-y: auto;
                                    }
                                </style>
                                <table class="table table-hover table-bordered" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th scope="col">Medicine ID</th>
                                        <th scope="col">Medicine Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Medicine Category</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Manufacture</th>
                                        <th scope="col">Expire Date</th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    <?php
                                    if (mysqli_num_rows($query_run) > 0) {

                                        while ($Meddata = mysqli_fetch_assoc($query_run)) {

                                            ?>
                                            <tr>
                                                <td> <?php echo $Meddata ['medid']; ?> </td>
                                                <td> <?php echo $Meddata ['medname']; ?> </td>
                                                <td><p class="d-inline">Rs</p> <?php echo $Meddata ['medprice']; ?>    </td>
                                                <td> <?php echo $Meddata ['medcategory']; ?> </td>
                                                <td> <?php echo $Meddata ['quantity']; ?> </td>
                                                <td> <?php echo $Meddata ['manufacture']; ?> </td>
                                                <td> <?php echo $Meddata ['expirydate']; ?> </td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        echo '<div class="alert alert-warning" role="alert">Data Not Found !</div>';
                                    }
                                    ?>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="mt-5">

        <div class="row mt-5 ml-0 mr-0">
            <div class="col-12">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <div class="card-title"><h3>Product Tracker</h3></div>
                        <p class="mb-4 bg-light">Check for expired product </p>
                        <div class="row">

                            <?php

                            include('dbconfig.php');
                            $sql = "Select * from medicine";
                            $result = mysqli_query($connection, $sql);

                            $countofexpro=0;
                            while ($row = (mysqli_fetch_assoc($result))) {

                                $edate = $row['expirydate'];//database
                                $id = $row['medid'];//database
                                $name = $row['medname'];//database

                                $edate1 = strtotime($edate);

                                $startdate = strtotime('-15 days', $edate1);
                                $enddate = strtotime('+15 days', $edate1);
                                $now = new DateTime();
                                $now = $now->format('Y-m-d');
                                $now = strtotime($now);
                                $_SESSION['countof']=$countofexpro++;
                                ?>

                                <div class="col-3">
                                    <div class="card bg-dark mb-2">
                                        <div class="card-body text-light">
                                            <?php
                                            echo $countofexpro;
                                            echo '<h4 class="text-warning"> Product Name : ' . $name . '</h4>' . '<br>';
                                            echo '<h4 class="text-warning"> Product ID : ' . $id . '</h4>' . '<br>';
                                            echo '<p class="bg-warning text-black rounded-3 p-1"> Expiry date: ' . date('Y-m-d', $edate1) . '<p> <br>';
                                            echo 'Nofity start date: ' . date('Y-m-d', $startdate) . '<br>';
                                            echo 'Nofity end date: ' . date('Y-m-d', $enddate) . '<br>';
                                            /* echo 'Today: ' . date('Y-m-d', $now) . '<br>';*/
                                            echo '<br>';

                                            if ($edate1 > $startdate && $edate1 < $enddate) {
                                                if ($edate1 < $now) {
                                                    echo '<div class="alert alert-danger" role="alert">Product is already expired  !</div>';
                                                }
                                                if ($edate1 == $now) {
                                                    echo "Product will expire today: ";
                                                }
                                                if ($edate1 > $now) {
                                                    echo '<div class="alert alert-warning" role="alert">Product is going to expire  !</div>';
                                                }
                                            } else {
                                                echo 'false';
                                            }

                                            ?>

                                        </div>
                                    </div>
                                </div>

                                <?php

                            }


                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


<?php
include('Includes/emp_footer.php');
?>