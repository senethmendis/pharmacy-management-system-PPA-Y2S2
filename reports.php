<?php
include('includes/session_start.php');
include('includes/header.php');
include('includes/navbar.php');
?>

    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800" style="margin-left: 1rem">Reports</h1>
        </div>


        <div class="row" style="margin: .8rem">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h3>Sales History</h3>

                            <a href="sales_history_report.php" target="_blank" class="btn btn-primary d-inline-flex">Download Report</a>

                        </div>

                        <div class="container">
                            <br>
                            <div class="row">

                                <div class="col-xs-8">

                                    <?php
                                    include('dbconfig.php');

                                    if ($connection) {
                                        $query = "select * from invoice_order_item";
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

                                    <table class="table table-hover table-earnings table-earnings__challenge pl-4 ">
                                        <thead>
                                        <tr>
                                            <th>Sales ID</th>
                                            <th>Item Code</th>
                                            <th>Item Name</th>
                                            <th>Order Item Quantity</th>
                                            <th>Order Item Price</th>
                                            <th>Total Amount</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php


                                        if (mysqli_num_rows($query_run) > 0) {

                                            while ($data = mysqli_fetch_assoc($query_run)) {

                                                ?>
                                                <tr>
                                                    <td><?php echo $data ['order_id']; ?></td>
                                                    <td><?php echo $data ['item_code']; ?></td>
                                                    <td><?php echo $data ['item_name']; ?></td>
                                                    <td><?php echo $data ['order_item_quantity']; ?></td>
                                                    <td><?php echo $data ['order_item_price']; ?></td>
                                                    <td><?php echo $data ['order_item_final_amount']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        } else {
                                            echo '<div class="alert alert-warning" role="alert"> No Sales Data Found !</div>';
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
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h3>Medicine Logs</h3>

                            <a href="medicine_report.php" target="_blank" class="btn btn-primary d-inline-flex">Download Report</a>

                        </div>

                        <div class="container">
                            <br>
                            <div class="row">

                                <div class="col-xs-8">

                                    <?php
                                    include('dbconfig.php');

                                    if ($connection) {
                                        $query = "select * from medicine";
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

                                    <table class="table table-hover table-earnings table-earnings__challenge pl-4 ">
                                        <thead>
                                        <tr>
                                            <th>Medicine ID</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Category</th>
                                            <th>Manufacture</th>
                                            <th>Quantity</th>
                                            <th>ExpireDate</th>
                                            <th>Availability</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php


                                        if (mysqli_num_rows($query_run) > 0) {

                                            while ($data = mysqli_fetch_assoc($query_run)) {

                                                ?>
                                                <tr>
                                                    <td><?php echo $data ['medid']; ?></td>
                                                    <td><?php echo $data ['medname']; ?></td>
                                                    <td><?php echo $data ['medprice']; ?></td>
                                                    <td><?php echo $data ['medcategory']; ?></td>
                                                    <td><?php echo $data ['manufacture']; ?></td>
                                                    <td><?php echo $data ['quantity']; ?></td>
                                                    <td><?php echo $data ['expirydate']; ?></td>
                                                    <td><?php echo $data ['status']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        } else {
                                            echo '<div class="alert alert-warning" role="alert"> No Sales Data Found !</div>';
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
        </div>

        <div class="row" style="margin: .8rem">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h3>Prescription History</h3>
                            <a href="prescription_history_report.php" target="_blank" class="btn btn-primary d-inline-flex">Download Report</a>
                        </div>

                        <div class="container">
                            <br>
                            <div class="row">
                                <div class="col-xs-8">
                                    <?php
                                    include('dbconfig.php');

                                    if ($connection) {
                                        $query = "select * from prescription_history";
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

                                    <table class="table table-hover table-earnings table-earnings__challenge pl-4 ">
                                        <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Order Date</th>
                                            <th>Order Name</th>
                                            <th>Order Email</th>
                                            <th>Order NIC</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php


                                        if (mysqli_num_rows($query_run) > 0) {

                                            while ($data = mysqli_fetch_assoc($query_run)) {

                                                ?>
                                                <tr>
                                                    <td><?php echo $data ['order_id']; ?></td>
                                                    <td><?php echo $data ['order_date']; ?></td>
                                                    <td><?php echo $data ['order_name']; ?></td>
                                                    <td><?php echo $data ['order_email']; ?></td>
                                                    <td><?php echo $data ['order_nic']; ?></td>
                                                    <td><?php echo $data ['order_contact']; ?></td>
                                                    <td><?php echo $data ['order_disc']; ?></td>
                                                    <td>
                                                        <img src="uploads/PrescriptionOrders/<?php echo $data ['order_img']; ?>"
                                                             width="100px" alt="img"></td>
                                                </tr>
                                                <?php
                                            }
                                        } else {
                                            echo '<div class="alert alert-warning" role="alert"> No Sales Data Found !</div>';
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
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h3>Customer Registration Data</h3>
                            <a href="customer_report.php" target="_blank" class="btn btn-primary d-inline-flex">Download Report</a>
                        </div>

                        <div class="container">
                            <br>
                            <div class="row">
                                <div class="col-xs-8">
                                    <?php
                                    include('dbconfig.php');

                                    if ($connection) {
                                        $query = "select * from customers";
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

                                    <table class="table table-hover table-earnings table-earnings__challenge pl-4 ">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Registerd Date</th>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>Email</th>
                                            <th>NIC</th>
                                            <th>Contact</th>
                                            <th>Address</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php


                                        if (mysqli_num_rows($query_run) > 0) {

                                            while ($data = mysqli_fetch_assoc($query_run)) {

                                                ?>
                                                <tr>
                                                    <td><?php echo $data ['cid']; ?></td>
                                                    <td><?php echo $data ['registerddate']; ?></td>
                                                    <td><?php echo $data ['cname']; ?></td>
                                                    <td><?php echo $data ['cage']; ?></td>
                                                    <td><?php echo $data ['cemail']; ?></td>
                                                    <td><?php echo $data ['cnic']; ?></td>
                                                    <td><?php echo $data ['ccontact']; ?></td>
                                                    <td><?php echo $data ['caddress']; ?></td>

                                                <?php
                                            }
                                        } else {
                                            echo '<div class="alert alert-warning" role="alert"> No Sales Data Found !</div>';
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
        </div>

    </div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>