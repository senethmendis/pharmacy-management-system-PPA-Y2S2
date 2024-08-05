<!-- Sidebar -->
<ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
            <img src="https://cdn-icons-png.flaticon.com/512/3004/3004458.png" alt="lifecarelogo" width="30px">
        </div>
        <div class="sidebar-brand-text mx-3">Lifecare</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="dash.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        System Overview
    </div>

    <li class="nav-item">
        <a class="nav-link" href="register.php">
            <i class="fas fa-user-friends"></i>

            <span>Manage Employee</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="manage_admin_encrypt.php">
            <i class="fas fa-lock"></i>
            <span>Manage Admins</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="web_store_manager.php">
            <i class="fas fa-store"></i>
            <span>Web Store</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="admin_medicine_manager.php">
            <i class="fas fa-prescription-bottle-alt"></i>
            <span>Medicine</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="manage_orders.php">
            <i class="fas fa-cart-plus"></i>
            <span>Orders</span>
        </a>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="reports.php">
            <i class="fas fa-file-medical-alt"></i>
            <span>Reports</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="inventory.php">
            <i class="fas fa-truck-loading"></i>
            <span>Inventory</span>
        </a>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="notificationpanel.php">

            <i class="fas fa-bell"></i>
            <span>Notification</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <div class="text-center d-none d-md-inline" style="padding-top: 2rem; font-family: 'Electrolize', sans-serif; font-size: 0.8rem; margin: 0 20px">
        <p> Time </p>
        <p id="livetime" style="font-weight: bold" class="text-light"> test time</p>

        <p> Date </p>
        <p id="livedate" style="font-weight: bold;" class="text-light"> test date</p>
    </div>


</ul>


<!-- End of Sidebar -->


<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>


            <a class="btn btn-primary m-4" href="invoiceSystem/index.php"> <i class="fas fa-cash-register mr-3"></i> Cashier System </a>
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Alerts -->
                <li class="nav-item d-inline m-4">
                        <a href="notificationpanel.php">
                            <i class="text-danger fas fa-bell">
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
                <div class="topbar-divider d-none d-sm-block">
                </div>
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">

                        <?php if(!isset($_SESSION['adminUsername'])) : ?>
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">   Profile </span>
                        <?php else: ?>
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">   <?php echo $_SESSION['adminUsername']  ?> </span>
                        <?php endif; ?>

                        <img class="img-profile rounded-circle"
                             src="https://cdn.pixabay.com/photo/2017/01/31/21/23/avatar-2027366_960_720.png">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                         aria-labelledby="userDropdown">

                        <a class="dropdown-item" href="logoutdash.php" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!--------------------------------------------------------------------------------------------------->

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
                        <form action="logoutdash.php" method="POST">
                            <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>