<?php
include('includes/session_start.php');
include('includes/header.php');
include('includes/navbar.php');
?>


    <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Employee Data</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="EmployeeRegiter.php" method="POST">
                    <?php
                        include('EmployeeRegiter.php');
                    ?>

                    <input type="hidden" name="notification" value="New Employee Added !!!">

                    <div class="modal-body">
                        <div class="form-group">
                            <label> First Name </label>
                            <input type="text" name="adminFullname" class="form-control" placeholder="Enter Full Name">
                        </div>

                        <div class="form-group">
                            <label> Last Name </label>
                            <input type="text" name="lastname" class="form-control" placeholder="Enter Last Name">
                        </div>

                        <div class="form-group">
                            <label> Phone </label>
                            <input type="tel" name="adminContact" class="form-control" placeholder="Enter Phone Number">
                        </div>

                        <div class="form-group">
                            <label> Address </label>
                            <input type="tel" name="adminAddress" class="form-control" placeholder="Enter Address">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="adminEmail" class="form-control" placeholder="Enter Email">
                        </div>

                        <div class="form-group">
                            <label>NIC</label>
                            <input type="text" name="nic" class="form-control" placeholder="Enter NIC">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="confirmpassword" class="form-control"
                                   placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="registerbtn" class="btn btn-primary">Register</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                        Add Employee Profile
                    </button>



                </h6>
            </div>

            <div class="card-body">

                <div class="table-responsive">
                    <?php
                    include_once ('dbconfig.php');
                    if ($connection) {
                        $query = "select * from employee";
                        $query_run = mysqli_query($connection, $query);

                    } else {
                        echo "db connection issue";
                    }

                    ?>
                    <table class="table" id="dataTable">
                        <thead>
                        <tr>
                            <th> ID </th>
                            <th> Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>NIC</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>
                        </thead>
                        <tbody>

                        <!--to fetch data to rows-->
                        <?php


                        if (mysqli_num_rows($query_run) > 0) {

                            while ($row = mysqli_fetch_assoc($query_run)) {

                                ?>
                                <tr>
                                    <td> <?php echo $row ['Empid']; ?> </td>
                                    <td> <?php echo $row ['EmpName']; ?> </td>
                                    <td> <?php echo $row ['EmpEmail']; ?> </td>
                                    <td> <?php echo $row ['EmpAddress']; ?> </td>
                                    <td> <?php echo $row ['EmpContact']; ?> </td>
                                    <td> <?php echo $row ['Emp_nic']; ?> </td>


                                    <td>
                                        <a href="EditEmployeeDetails.php?id=<?= $row ['Empid']; ?>" id="editModalLabel" class="btn btn-primary">Edit</a>
                                    </td>

                                    <td>
                                        <form action="deleteEmployee.php" method="post">
                                            <button type="submit" name="delete_comployee_btn" value="<?=$row ['Empid']; ?>" class="btn btn-danger">  DELETE
                                            </button>
                                            <input type="hidden" name="get_email" value="<?=$row ['EmpEmail']; ?>" >
                                            <input type="hidden" name="nofitication_name" value="Employee">
                                        </form>
                                    </td>

                                </tr>


                                <?php
                            }
                        }
                        else{
                            echo '<div class="alert alert-warning" role="alert"> No data Found! </div>';
                        }
                        ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>