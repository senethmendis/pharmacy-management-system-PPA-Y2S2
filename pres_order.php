<?php
include ('includes/customer_sesstion.php');
include('includes/lifecareheadder.php');
include('includes/lifecarenavbar.php');

?>
<div class="container-fluid bg-white">

    <section class="header-section-01 bg-white">

        <div class="row">
            <div class="col-lg-6">
                <div class="container title-wrapper">
                    <h1> Send Your Prescriptions <br> From Here</h1>

                    <p>If you don't have an account you can <a href="cust_register_form.php">Register here</a>.</p>
                </div>

                <img src="Assets/img/pres.gif" class="img-fluid hedder-img-sty" alt="Picuture"
                     width="">

            </div>
            <div class="col-lg-6 alignment">

                <div class="container bg-light oder-form-styles">

                    <h3>Prescription Form</h3>

                    <?php
                    include_once('dbconfig.php');

                    if (isset($_POST['btn_send'])) {

                        $senders_name = $_POST['ordered_name'];
                        $senders_email = $_POST['ordered_email'];
                        $senders_nic = $_POST['ordered_nic'];
                        $senders_contact = $_POST['ordered_contact'];
                        $senders_disc = $_POST['ordered_disc'];


                        if ($_FILES["ordered_img"]["error"] == 4) {
                            echo '<div class="alert alert-warning" role="alert">Image Does not exist !</div>';
                        } else {
                            $fileName = $_FILES["ordered_img"]["name"];
                            $fileSize = $_FILES["ordered_img"]["size"];
                            $tmpName = $_FILES["ordered_img"]["tmp_name"];

                            $validImageExtension = ['jpg', 'jpeg', 'png'];
                            $imageExtension = explode('.', $fileName);
                            $imageExtension = strtolower(end($imageExtension));

                            if ($senders_name == null && $senders_email == null && $senders_nic == null && $senders_contact == null) {
                                echo '<div class="alert alert-warning" role="alert">Fill the Fields !</div>';
                            } else {

                                if (!in_array($imageExtension, $validImageExtension)) {

                                    echo '<div class="alert alert-warning" role="alert">Invalid Image Extension !</div>';
                                } else if ($fileSize > 2000000) {

                                    echo '<div class="alert alert-warning" role="alert">Image Size Is Too Large !</div>';
                                } else {
                                    $newImageName = uniqid();
                                    $newImageName .= '.' . $imageExtension;

                                    move_uploaded_file($tmpName, 'uploads/PrescriptionOrders/' . $newImageName);
                                    $query = "INSERT INTO orders (order_name,order_email,order_nic,order_contact,order_disc,order_img)  VALUES('$senders_name','$senders_email','$senders_nic','$senders_contact','$senders_disc','$newImageName')";
                                    $query_run = mysqli_query($connection, $query);

                                    $query1 = "INSERT INTO prescription_history (order_name,order_email,order_nic,order_contact,order_disc,order_img)  VALUES('$senders_name','$senders_email','$senders_nic','$senders_contact','$senders_disc','$newImageName')";
                                    $query_run2 = mysqli_query($connection, $query1);

                                    $notifyName="Order";
                                    $nameoftheitem=$senders_name.''." Sent an Prescription, Email of the Sender : ".''.$senders_email;
                                    $noti ="INSERT INTO notification(notifyName,notification) VALUES ('$notifyName','$nameoftheitem')";
                                    $runnoti = mysqli_query($connection, $noti);

                                    /*echo " <script> alert('Successfully Added');document.location.href = 'data.php';</script>";*/

                                    if ($query_run and $query_run2) {
                                        echo '<div class="alert alert-success" role="alert">Prescription Sent !</div>';

                                    } else {
                                        echo '<div class="alert alert-danger" role="alert">Prescription Not sent Error !</div>';
                                    }
                                }
                            }
                        }
                    }

                    ?>

                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3 row">
                            <!-- <label for="name" class="col-sm-2 col-form-label"></label> -->
                            <div class="col-sm-11">
                                <input type="text" class="form-control" required name="ordered_name" id="inputname"
                                       placeholder="Name">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <!-- <label for="inputemail" class="col-sm-2 col-form-label">Email</label> -->
                            <div class="col-sm-11">
                                <input type="email" required class="form-control" name="ordered_email" id="txtEmail"
                                       placeholder="Email">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <!-- <label for="inputnic" class="col-sm-2 col-form-label">NIC</label> -->
                            <div class="col-sm-11">
                                <input type="text" class="form-control" required name="ordered_nic" id="inputnic"
                                       placeholder="NIC">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <!-- <label for="inputnic" class="col-sm-2 col-form-label">NIC</label> -->
                            <div class="col-sm-11">
                                <input type="text" class="form-control" required name="ordered_contact" id="inputnum"
                                       placeholder="Phone number">
                            </div>
                        </div>
                        <div class="col-sm-11">
                            <!-- <label for="textarea1" class="form-label">Description</label> -->
                            <textarea class="form-control" id="Textarea1" name="ordered_disc" required rows="4"
                                      placeholder="Description *Optional"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload Prescription picture</label>
                            <input class="form-control" type="file" name="ordered_img" id="formFile">
                        </div>
                        <div class="d-grid gap-2 d-md-block">
                            <button class="sumbit-btn btn btn-primary mx-auto" name="btn_send" type="submit"
                                    onClick=""> Send
                            </button>

                        </div>

                    </form>

                </div>
            </div>
        </div>

        <hr>

    </section>

    <section name="about-section" class="bg-white">
        <div class="container-fluid bg-white">
            <div class="row bg-white">
                <div class="col-lg-6">
                    <div class="container-fluid story-about">
                        <h4>Who are we?</h4>
                        <h1>Short Story About LifeCare</h1>
                        <p>Lifecare pharmacy was established in 2015 as a sole proprietor business entity by C.E.
                            Wijewardhana. In
                            addition to our medical healthcare products we have a wide range of beauty care products
                            which you can
                            shop
                            at our pharmacy. We have a friendly experienced staff to serve you at all times. Our aim is
                            to deliver
                            the
                            best customer service &amp; healthcare products because we value our customers and their
                            essential
                            health
                            needs as our first priority. We deliver reliable, accessible, and innovative care for
                            countless patients
                            and
                            families, Providing expert guidance to patients. Coordinating with health care
                            professionals. Utilizing
                            best
                            -in class pharmacy workflow and dispensing systems to maximize accuracy and efficiency.</p>
                        <a href="#">Know more-></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="container-fluid stting-img">
                        <img src="Assets/img/pres2.gif" class="img-fluid stting-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>



<?php

include('includes/scripts.php');
include('includes/lifecarefooter.php')
?>