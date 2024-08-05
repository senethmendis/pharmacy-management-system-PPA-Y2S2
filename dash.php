<?php
include('includes/session_start.php');
include('includes/header.php');
include('includes/navbar.php');
?>


    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

        </div>

        <div class="row pl-2">

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow h-100 py-2 bg-primary">
                    <div class="card-body p-4">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2 p-2">
                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1"><h5>Sales</h5>
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 Dash-Cards text-white">
                                    <?php
                                    include('dbconfig.php');

                                    $query = "SELECT order_id FROM invoice_order_item ORDER BY order_id";
                                    $query_run = mysqli_query($connection, $query);
                                    $Row = mysqli_num_rows($query_run);
                                    echo '<h4> <!--add tag--> ' . $Row . '</h4>'
                                    ?>
                                    <!-- <h4>number</h4> -->
                                </div>
                            </div>
                            <div class="col-auto p-2">
                                <i class="fas fa-cash-register fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow h-100 py-2 bg-primary">
                    <div class="card-body p-4">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2 p-2">
                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1"><h5>Total
                                        Income</h5>
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 Dash-Cards text-white">
                                    <?php
                                    include('dbconfig.php');

                                    $sql = "SELECT  sum(order_item_final_amount) as total FROM invoice_order_item";
                                    $result = $connection->query($sql);
                                    ?>

                                    <?php
                                    while ($row = $result->fetch_object()): ?>
                                        <h1>Rs <?php echo $row->total ?>. 00 </h1>
                                    <?php endwhile; ?>
                                    <!-- <h4>number</h4> -->
                                </div>
                            </div>
                            <div class="col-auto p-2">
                                <i class="fas fa-hand-holding-usd fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>


    </div>

    <hr>

    <!-- Content Row -->
    <div class="row pl-3 pr-3">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2 bg-dark">
                <div class="card-body p-4">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2 p-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Admins
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800 Dash-Cards text-white">
                                <?php
                                include('dbconfig.php');

                                $query = "SELECT id FROM admintable ORDER BY id";
                                $query_run = mysqli_query($connection, $query);
                                $AdminRow = mysqli_num_rows($query_run);
                                echo '<h4> <!--add tag--> ' . $AdminRow . '</h4>'
                                ?>
                                <!-- <h4>number</h4> -->
                            </div>
                        </div>
                        <div class="col-auto p-2">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Earnings (Monthly) Card Example -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2 bg-dark">
                <div class="card-body p-4">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2 p-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Customers</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <?php
                                    require 'dbconfig.php';
                                    $query = "SELECT Cnic FROM customers ORDER BY Cnic";
                                    $query_run = mysqli_query($connection, $query);
                                    $CustomersRow = mysqli_num_rows($query_run);

                                    echo '<div class="h5 mb-0 font-weight-bold text-white" style="margin-left: 1rem"> ' . $CustomersRow . '</div>'
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto p-2">
                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--Employees -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2 bg-dark">
                <div class="card-body p-4">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2 p-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Employee</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <?php
                                    require 'dbconfig.php';
                                    $query = "SELECT Empid FROM employee ORDER BY Empid";
                                    $query_run = mysqli_query($connection, $query);
                                    $EmpRow = mysqli_num_rows($query_run);
                                    echo '<div class="h5 mb-0 font-weight-bold text-gray-800 text-white" style="margin-left: 1rem"> ' . $EmpRow . '</div>';

                                    ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-auto p-2">
                            <i class="fas fa-user-nurse fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Earnings (Monthly) Card Example -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2 bg-dark">
                <div class="card-body p-4">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2 p-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Orders</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <?php

                                    require 'dbconfig.php';

                                    $query = "SELECT order_id FROM orders ORDER BY order_id";
                                    $query_run = mysqli_query($connection, $query);
                                    $orderRow = mysqli_num_rows($query_run);

                                    echo '<div class="h5 mb-0 font-weight-bold text-white" style="margin-left: 1rem"> ' . $orderRow . '</div>'
                                    ?>

                                </div>

                            </div>
                        </div>
                        <div class="col-auto p-2">
                            <i class="fas fa-cube fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <hr>

    <div class="row">
        <!--other cont -->


    </div>

    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable();
        });
    </script>
    <!-- Content Row -->


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>