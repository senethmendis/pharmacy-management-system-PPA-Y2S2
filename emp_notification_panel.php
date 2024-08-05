<?php
include ('includes/session_start.php');
include('Includes/emp_headder.php');
include('Includes/emp_nabvar.php');
?>

<div class="container-fluid">
    <main class="container">


        <div class="bg-primary d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">


            <img class="me-3" src="https://cdn-icons-png.flaticon.com/512/3004/3004458.png" alt="" width="25px">
            <div class="lh-1">
                <h1 class="h6 mb-0 text-white lh-1 d-inline">Notification</h1>
            </div>
        </div>

        <form action="emp_clearnotification.php" method="post">
            <button type="submit" name="clear_notification" class="btn btn-danger d-inline mb-auto"> Clear Notification </button>
        </form>




        <div class="my-3 p-3 bg-body rounded shadow-sm">


            <!--noti set-->
            <?php
            include ('dbconfig.php');

            if ($connection) {
                $query = "select * from notification";
                $query_run = mysqli_query($connection, $query);
            } else {
                echo "db connection issue";
            }
            ?>

            <?php
            if (mysqli_num_rows($query_run) > 0) {
                while ($notify = mysqli_fetch_assoc($query_run)) {
                    if ($notify['notifyName']=="Medicine"){
                        ?>
                        <div class=" d-flex text-muted pt-3">
                            <div class="bg-success flex-shrink-0 me-2 rounded flex-box-icons"
                                 style="width: 32px; height: 32px;">
                                <i class="text-light fas fa-ambulance"></i>
                            </div>

                            <p class="pb-3 mb-0 small lh-sm border-bottom">
                            <h6 class="border-bottom pb-2 mb-0"> </h6>
                            <input type="hidden" name="notificationid" value="<?php echo $notify ['notifyId']; ?>">
                            <strong class="d-block text-gray-dark mr-4"> <?php echo $notify ['notifyName']; ?> </strong>
                            <?php echo $notify ['notification']; ?>
                            </p>
                        </div>
                        <?php
                    }elseif ($notify['notifyName']=="Web Product"){
                        ?>
                        <div class=" d-flex text-muted pt-3">
                            <div class="bg-primary flex-shrink-0 me-2 rounded flex-box-icons"
                                 style="width: 32px; height: 32px;">
                                <i class="fas fa-weight-hanging text-light"></i>
                            </div>

                            <p class="pb-3 mb-0 small lh-sm border-bottom">
                            <h6 class="border-bottom pb-2 mb-0"> </h6>
                            <input type="hidden" name="notificationid" value="<?php echo $notify ['notifyId']; ?>">
                            <strong class="d-block text-gray-dark mr-4"> <?php echo $notify ['notifyName']; ?> </strong>
                            <?php echo $notify ['notification']; ?>

                        </div>
                        <?php
                    }elseif ($notify['notifyName']=="Order"){
                        ?>
                        <div class=" d-flex text-muted pt-3">
                            <div class="bg-warning flex-shrink-0 me-2 rounded flex-box-icons"
                                 style="width: 32px; height: 32px;">
                                <i class="fas fa-cart-arrow-down text-light"></i>
                            </div>

                            <p class="pb-3 mb-0 small lh-sm border-bottom">
                            <h6 class="border-bottom pb-2 mb-0"> </h6>
                            <input type="hidden" name="notificationid" value="<?php echo $notify ['notifyId']; ?>">
                            <strong class="d-block text-gray-dark mr-4"> <?php echo $notify ['notifyName']; ?> </strong>
                            <?php echo $notify ['notification']; ?>

                        </div>
                        <?php
                    }elseif ($notify['notifyName']=="Medicine"){
                        ?>
                        <div class=" d-flex text-muted pt-3">
                            <div class="bg-warning  flex-shrink-0 me-2 justify-content-center align-items-center rounded flex-box-icons"
                                 style="width: 32px; height: 32px;">
                                <i class="m-2 fas fa-capsules "></i>
                            </div>

                            <p class="pb-3 mb-0 small lh-sm border-bottom">
                            <h6 class="border-bottom pb-2 mb-0"> </h6>
                            <input type="hidden" name="notificationid" value="<?php echo $notify ['notifyId']; ?>">
                            <strong class="d-block text-gray-dark mr-4"> <?php echo $notify ['notifyName']; ?> </strong>
                            <?php echo $notify ['notification']; ?>

                        </div>
                        <?php
                    }

                }
            } else {
                echo '<div class="alert alert-warning mt-2" role="alert"> You dont have any notifications !</div>';
            }
            ?>

            <!--suggestions-->
            <small class="d-block text-end mt-3"> </small>
        </div>

        <!---------------------------------------------------------------------->

    </main>
</div>

<?php
include('Includes/emp_footer.php');
?>