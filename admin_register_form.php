<?php
include('includes/session_start.php');
include('includes/header.php');
include('includes/navbar.php');
include_once('dbconfig.php');
?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="admin_register.php" method="POST">
                <?php
                include('admin_register.php');
                ?>

                <input type="hidden" name="notification" value="New Employee Added !!!">

                <div class="modal-body">

                    <div class="form-group">
                        <label> First Name </label>
                        <input type="text" name="adminFullname" class="form-control" placeholder="Enter Full Name">
                    </div>

                    <div class="form-group">
                        <label> Last Name </label>
                        <input type="text" name="adminLastname" class="form-control" placeholder="Enter Last Name">
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
                        <label> NIC </label>
                        <input type="text" name="nic" class="form-control" placeholder="Enter NIC">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="adminEmail" class="form-control" placeholder="Enter Email">
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter Username">
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
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addadminprofile">
                    Add Admin Profile
                </button>


            </h6>
        </div>

        <div class="card-body">

            <div class="table-responsive">
                <?php

                if ($connection) {
                    $query = "select * from admintable";
                    $query_run = mysqli_query($connection, $query);

                } else {
                    echo "db connection issue";
                }

                ?>
                <table class="table" id="dataTable">
                    <thead>
                    <tr>
                        <th> ID</th>
                        <th> Name</th>
                        <th> Username</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>NIC</th>
                        <th>Password</th>
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
                                <td> <?php echo $row ['id']; ?> </td>
                                <td> <?php echo $row ['fullname']; ?> </td>
                                <td> <?php echo $row ['username']; ?> </td>
                                <td> <?php echo $row ['email']; ?> </td>
                                <td> <?php echo $row ['address']; ?> </td>
                                <td> <?php echo $row ['contact']; ?> </td>
                                <td> <?php echo $row ['nic']; ?> </td>
                                <td> <?php echo $row ['password']; ?> </td>


                                <td>
                                    <a href="editAdminDetails.php?id=<?= $row ['id']; ?>" id="editModalLabel"
                                       class="btn btn-primary">Edit</a>
                                </td>

                                <td>
                                    <form action="deleteAdmin.php" method="post">
                                        <button type="submit" name="delete_admin_btn" value="<?= $row ['id']; ?>"
                                                class="btn btn-danger"> DELETE
                                        </button>
                                        <input type="hidden" name="temp_admin_email" value="<?= $row ['email']; ?>">
                                        <input type="hidden" name="nofitication_name" value="Employee">

                                    </form>
                                </td>

                            </tr>


                            <?php
                        }
                    } else {
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
