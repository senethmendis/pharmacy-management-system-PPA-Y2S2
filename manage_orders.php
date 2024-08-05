<?php
include('includes/session_start.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container-fluid">



    <div class="row">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="mb-4">Manage Orders</h3>
                    </div>

                    <div class="table-responsive">

                        <?php

                        include ('dbconfig.php');

                        if ($connection) {
                            $query = "select * from orders";
                            $query_run = mysqli_query($connection, $query);

                        } else {
                            echo '<div class="alert alert-warning" role="alert">
                                        No Data Found !
                                        </div>';
                        }
                        ?>
                        <table class="table" id="dataTable">
                            <thead>
                            <tr>
                                <th>Order ID</th>
                                <th> Date</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>NIC</th>
                                <th>Contact</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            <!--to fetch data to rows-->
                            <?php


                            if (mysqli_num_rows($query_run) > 0) {

                                while ($row = mysqli_fetch_assoc($query_run)) {

                                    ?>
                                    <tr>
                                        <td> <?php echo $row ['order_id']; ?> </td>
                                        <td> <?php echo $row ['order_date']; ?> </td>
                                        <td> <?php echo $row ['order_name']; ?> </td>
                                        <td> <?php echo $row ['order_email']; ?> </td>
                                        <td> <?php echo $row ['order_nic']; ?> </td>
                                        <td> <?php echo $row ['order_contact']; ?> </td>
                                        <td> <?php echo $row ['order_disc']; ?> </td>
                                        <td> <img class="img-fluid" width="100px" height="100px"  src="uploads/PrescriptionOrders/<?php echo $row["order_img"]; ?>"  title="<?php echo $row['order_img']; ?>" /> </td>
                                        <td>
                                            <a href="order_options.php?id=<?= $row ['order_id']; ?>" id="editModalLabel"
                                               class="btn btn-primary">View</a>
                                        </td>

                                        <td>
                                            <form action="remove_orders.php" method="post">
                                                <button type="submit" name="delete_order_btn"
                                                        value="<?= $row ['order_id']; ?>" class="btn btn-danger"> Remove
                                                </button>
                                                <input type="hidden" name="nofitication_name" value="Employee">
                                            </form>
                                        </td>
                                    </tr>

                                    <?php
                                }
                            } else {
                                echo '<div class="alert alert-warning" role="alert">
                                        No Data Found !
                                        </div>';
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


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
