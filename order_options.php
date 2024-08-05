<?php
include('includes/session_start.php');
include('includes/header.php');
include('includes/navbar.php');

?>

    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-4">


            <div class="card">
                <div class="card-body">

                    <div class="card-header mr-auto">
                        <h4>Prescription Information</h4>
                    </div>

                    <?php
                    include ('dbconfig.php');
                    if (isset($_GET['id'])) {
                    $order_id = mysqli_real_escape_string($connection, $_GET['id']);
                    $query = "SELECT * FROM orders WHERE order_id='$order_id' ";
                    $run = mysqli_query($connection, $query);
                    if (mysqli_num_rows($run) > 0) {
                    $ord_data = mysqli_fetch_array($run);
                    ?>
                    <form action="Emailorder_ready.php" method="POST">
                        <div class="form-group common-margins">
                            <label> Order ID </label>
                            <input type="text" name="orderid" readonly value="<?= $ord_data['order_id']; ?>"
                                   class="form-control" placeholder="">

                        </div>

                        <div class="form-group common-margins">
                            <label> Date </label>
                            <input type="text" name="orderdate" readonly value="<?= $ord_data['order_date']; ?>"
                                   class="form-control" placeholder="">
                        </div>

                        <div class="form-group">
                            <label> Name </label>
                            <input type="text" readonly name="ordername" value="<?= $ord_data['order_name']; ?>"
                                   class="form-control" placeholder="">
                        </div>

                        <div class="form-group">
                            <label> Email </label>
                            <input type="tel" readonly name="orderemail" value="<?= $ord_data['order_email']; ?>"
                                   class="form-control" placeholder="">
                        </div>

                        <div class="form-group">
                            <label>NIC</label>
                            <input type="email" readonly name="ordernic" value="<?= $ord_data['order_nic']; ?>"
                                   class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Contact</label>
                            <input type="text" name="ordercontact" readonly value="<?= $ord_data['order_contact']; ?>"
                                   class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Discription</label>
                            <input type="text" name="orderdisc" readonly value="<?= $ord_data['order_disc']; ?>"
                                   class="form-control" placeholder="">
                        </div>

                        <div class="form-group">
                            <label>Image Link</label>
                            <div class="container-fluid">

                                <img class="img-fluid" src="uploads/PrescriptionOrders/<?php echo $ord_data["order_img"]; ?>"  width="150px" height="150px" title="<?php echo $ord_data['order_img']; ?>" />

                            </div>
                        </div>


                        <div class="modal-footer">

                            <a href="manage_orders.php" class="btn btn-secondary" data-dismiss="modal"> Close</a>
                            <button type="submit" name="readytopic" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">Ready to Pickup
                            </button>

                            <a download class="btn btn-success d-block" href="uploads/PrescriptionOrders/<?php echo $ord_data["order_img"]; ?>"> Download Prescription </a>

                        </div>

                </div>

                <?php

                }
                else {
                    echo "<h4 class='text-danger'>No id Found</h4>";
                }

                }

                ?>


            </div>

            </form>


        </div>
        <div class="col-lg-4">
            <div class="img-box"></div>

        </div>
        <div class="col-lg-1"></div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Conformation !</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5> Email sent !!! </h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>