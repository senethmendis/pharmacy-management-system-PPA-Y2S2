<!-- nav bar -->

<header class="site-header bg-black  sticky-top py-1">
    <nav class="container  d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="login.php" aria-label="Product">
            <img src="https://cdn-icons-png.flaticon.com/512/3004/3004458.png" width="25px" alt="">
        </a>
        <a class="py-2 d-none d-md-inline-block" href="index.php">Home</a>
        <a class="py-2 d-none d-md-inline-block" href="product_page.php">Product</a>
        <a class="py-2 d-none d-md-inline-block" href="pres_order.php">Prescription Order</a>
        <a class="py-2 d-none d-md-inline-block" href="about.php">About</a>

        <?php if (!isset($_SESSION["email"])) :?>
        <a class="py-2 text-danger d-none d-md-inline-block" href="cust_login_form.php">Login</a>

        <?php else: ?>
        <a class="py-2 text-danger d-none d-md-inline-block" data-toggle="modal" data-target="#logoutModal">logout</a>
        <p class="text-white py-2 text-primary d-none d-md-inline-block"><?php echo $_SESSION["email"] ?> </p>
        <?php endif; ?>


    </nav>
</header>

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
                <form action="logoutcustomer.php" method="POST">
                    <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>
