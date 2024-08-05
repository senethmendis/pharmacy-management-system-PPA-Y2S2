<?php
include('includes/session_start.php');
include('includes/header.php');
include('includes/navbar.php');
include_once ('dbconfig.php');
?>

    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-4">


            <div class="card">
                <div class="card-body">

                    <div class="card-header mr-auto">
                        <h4>Edit Web Product Information</h4>
                    </div>

                    <?php
                    $connection = mysqli_connect("localhost", "root", "", "lifecaredb") or die("Database connection failed");

                    if (isset($_GET['id'])) {
                    $pro_id = mysqli_real_escape_string($connection, $_GET['id']);
                    $query = "SELECT * FROM nonmedicalproducts WHERE proid='$pro_id' ";
                    $run = mysqli_query($connection, $query);


                    if (mysqli_num_rows($run) > 0) {

                    $emp_data = mysqli_fetch_array($run);
                    ?>


                    <?php
                    include_once ('dbconfig.php');

                    if(isset($_POST['updatebtn']))
                    {
                        $pro_id = mysqli_real_escape_string($connection, $_POST['pro_uniq']);
                        $pro_name = mysqli_real_escape_string($connection, $_POST['pro_name']);
                        $pro_price = mysqli_real_escape_string($connection, $_POST['pro_price']);
                        $pro_status = mysqli_real_escape_string($connection, $_POST['pro_status']);
                        $pro_quntity = mysqli_real_escape_string($connection, $_POST['pro_quantity']);


                        $query = "UPDATE nonmedicalproducts SET proname='$pro_name',proimg='',proprice='$pro_price',prostatus='$pro_status',proquantity='$pro_quntity' WHERE proid='$pro_id' ";

                        $run = mysqli_query($connection, $query);

                        if($run)
                        {
                            echo '<div class="alert alert-success m-2" role="alert">  Product Details Updated ! </div>';

                        }
                        else
                        {
                            echo '<div class="alert alert-danger mt-2" role="alert">  Product Details not Updated ! </div>';

                        }

                    }

                    ?>


                    <form action="" method="POST">
                        <input type="hidden" name="pro_uniq" value="<?=$emp_data['proid'] ?>">

                        <div class="form-group common-margins">
                            <label>Product Name </label>
                            <input type="text" name="pro_name" value="<?= $emp_data['proname']; ?>"
                                   class="form-control" placeholder="Enter Full Name">
                        </div>

                        <div class="form-group">
                            <label>Product Image </label>
                            <input type="file" name="pro_img" value="<?= $emp_data['proimg']; ?>"
                                   class="form-control" placeholder="Enter Phone Number">
                        </div>

                        <div class="form-group">
                            <label>Product Price</label>
                            <input type="number" name="pro_price" value="<?= $emp_data['proprice']; ?>"
                                   class="form-control" placeholder="Enter Address">
                        </div>

                        <div class="form-group">
                            <label>Product Status</label>
                            <input type="text" name="pro_status" value="<?= $emp_data['prostatus']; ?>"
                                   class="form-control" placeholder="Enter Email">
                        </div>

                        <div class="form-group">
                            <label>Product Quantity</label>
                            <input type="number" name="pro_quantity" value="<?= $emp_data['proquantity']; ?>" class="form-control"
                                   placeholder="Enter NIC">
                        </div>

                        <div class="modal-footer">
                            <a href="web_store_manager.php" class="btn btn-secondary" data-dismiss="modal" >Close</a>
                            <button type="submit" name="updatebtn" class="btn btn-primary">Update</button>
                        </div>

                </div>

                <?php

                }
                else {
                    echo '<div class="alert alert-info" role="alert">  No ID Found! </div>';
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


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>