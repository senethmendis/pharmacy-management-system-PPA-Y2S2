<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold text-dark" href="index.php"> <img
                    src="https://cdn-icons-png.flaticon.com/512/3004/3004458.png"
                    alt="lifecarelogo" width="30px"> Management Portal</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ms-auto fw-bold text-dark">
                <li class="nav-item m-2">
                    <a class="nav-link fw-bold fw-bold text-dark" aria-current="page" href="management_portal.php">Home</a>
                </li>

                <li class="nav-item m-2">
                    <a class="nav-link text-dark" aria-current="page" href="medicineManager.php">Medicine</a>
                </li>



                <li class="nav-item m-2">
                    <a class="nav-link fw-bold text-dark" aria-current="page" href="emp_web_store_manager.php">Web Store</a>
                </li>

                <li class="nav-item m-2">
                    <a class="nav-link fw-bold text-dark" aria-current="page" href="emp_inventory.php">Inventory Summery</a>
                </li>

                <li class="nav-item m-2">
                    <a class="nav-link fw-bold text-dark" aria-current="page" href="emp_notification_panel.php">
                        <i class='bx bxs-bell-ring' style='color:#ff0000'  >
                            <?php
                            include ('dbconfig.php');


                            $query = "SELECT notifyId FROM notification ORDER BY notifyId";
                            $query_run = mysqli_query($connection, $query);
                            $AdminRow = mysqli_num_rows($query_run);
                            if ($AdminRow==0){
                                echo "";
                            }else{
                                echo $AdminRow;
                            }
                            ?>
                        </i>
                    </a>
                </li>


                <?php if (!isset($_SESSION['adminUsername'])) : ?>
                    <li class="nav-item m-2 ms-auto">
                        <a class="nav-link text-danger" aria-current="page" href="#"> login </a>
                    </li>
                <?php else: ?>
                    <li class="nav-item m-2  ms-auto">
                        <a class="nav-link text-warning" aria-current="page"
                           href="#">  <?php echo $_SESSION['adminUsername'] ?> </a>
                    </li>

                    <li class="nav-item m-2  ms-auto">
                        <div class="container mt-2">
                            <a aria-current="page" title="Logout" href="logout.php" data-toggle="modal"
                               data-target="#logoutModal"> <i class='bx bx-power-off' style='color:#ffffff'> </i> </a>
                        </div>

                    </li>

                <?php endif; ?>


            </ul>

        </div>

    </div>
</nav>


<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <form action="logout.php" method="POST">
                    <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>

