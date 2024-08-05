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
                        <h4>Edit Employee Information</h4>
                    </div>

                    <?php
                    include_once ('dbconfig.php');

                    if (isset($_GET['id'])) {
                    $Emp_id = mysqli_real_escape_string($connection, $_GET['id']);
                    $query = "SELECT * FROM employee WHERE Empid='$Emp_id' ";
                    $run = mysqli_query($connection, $query);


                    if (mysqli_num_rows($run) > 0) {

                    $emp_data = mysqli_fetch_array($run);
                    ?>
                    <form action="EmployeeUpdate.php" method="POST">
                        <input type="hidden" name="emp_uniq" value="<?=$emp_data['Empid'] ?>">

                        <div class="form-group common-margins">
                            <label> Full Name </label>
                            <input type="text" name="fullname" value="<?= $emp_data['EmpName']; ?>"
                                   class="form-control" placeholder="Enter Full Name">
                        </div>

                        <div class="form-group">
                            <label> Phone </label>
                            <input type="tel" name="contact" value="<?= $emp_data['EmpContact']; ?>"
                                   class="form-control" placeholder="Enter Phone Number">
                        </div>

                        <div class="form-group">
                            <label> Address </label>
                            <input type="tel" name="address" value="<?= $emp_data['EmpAddress']; ?>"
                                   class="form-control" placeholder="Enter Address">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" value="<?= $emp_data['EmpEmail']; ?>"
                                   class="form-control" placeholder="Enter Email">
                        </div>

                        <div class="form-group">
                            <label>NIC</label>
                            <input type="text" name="nic" value="<?= $emp_data['Emp_nic']; ?>" class="form-control"
                                   placeholder="Enter NIC">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="password" value="<?= $emp_data['EmpPassword']; ?>"
                                   class="form-control" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="text" name="confirmpassword" class="form-control"
                                   placeholder="Confirm Password">
                        </div>

                        <div class="modal-footer">

                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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