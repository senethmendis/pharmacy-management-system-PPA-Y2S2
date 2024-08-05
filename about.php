<!doctype html>
<?php session_start();
include('includes/lifecareheadder.php');
include('includes/lifecarenavbar.php');
?>

<div class="container-fluid bg-white">

    <div class="container">

    </div>

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

    <main>


        <div class="container  py-5">

            <div class="p-5 mb-4 bg-light border rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">About Lifecare Pharmacy</h1>
                    <p class="col-md-8 fs-4">

                        At Lifecare Pharmacy it is our commitment to provide every customer with the
                        highest level of service. We pride ourselves on focusing on each patient’s
                        individual needs. Lifecare Pharmacy is dedicated to providing services that go
                        above and beyond the norm.
                    </p>
                    <a href="#MoreAboutLife" class="btn btn-primary btn-lg"> More About Us </a>

                </div>
            </div>

            <div class="mb-4  img-holder rounded-3">
                <img src="Assets/img/aboutus.gif" width="100%" class="img-fluid" alt="">
                <div class="container-fluid">

                </div>
            </div>

            <div class="row  text-center">
                <h1 class="mt-5 mb-3 fw-bold">Shop for</h1>
                <p class="mb-5 fs-5">
                    A better way to shop for health & beauty! Exactly what you need. Exactly where you are.
                </p>
            </div>

            <div class="row align-items-md-stretch mb-4">
                <div class="col-md-6">
                    <div class="h-100 p-5 text-white bg-primary rounded-3">
                        <h2>Skincare</h2>
                        <p>
                            One step to flawless beauty. Make your skin
                            glow and healthy with our store's range of skin
                            care products.
                        </p>
                        <a href="" class="btn btn-outline-light">See Products</a>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-light border rounded-3">
                        <h2>Fitness Supplements</h2>
                        <p>
                            Maximize your workouts and provide your body with the necessary protein and amino acids it
                            needs.

                        </p>
                        <a href="" class="btn btn-outline-light">See Products</a>
                    </div>
                </div>
            </div>


            <div class="row align-items-md-stretch ">

                <div class="col-md-6">
                    <div class="h-100 p-5 bg-light border rounded-3">
                        <h2>Multivitamins</h2>

                        <p>
                            Nourish your hair, nails, and skin. Let the vitamins take care of what your diet misses.
                        </p>

                        <a href="" class="btn btn-outline-light">See Products</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="h-100 p-5 text-white bg-primary rounded-3">
                        <h2>Pet Care</h2>
                        <p>
                            Here’s all that your pet needs food, supplements,
                            vitamins, and toys. Best place to buy all
                            requirements of good quality for pets.
                        </p>
                        <a href="" class="btn btn-outline-light">See Products</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-auto"></div>
            </div>

            <div class="p-5 mb-4 bg-dark text-light rounded-3 mt-4">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold" id="MoreAboutLife">More About Lifecare Pharmacy</h1>
                    <p class="col-md text-justify fs-4">

                        Our team works hard to lessen the burden and to make sure that patients receive the appropriate
                        therapies prescribed by their physicians. We actively work with all manufacturer co-pay programs and
                        foundations to make sure cost is not a determining factor for access to recommended prescription for
                        patients. Our aim is to deliver the best customer service & healthcare products because we value our
                        customers and their essential health needs as our first priority. We deliver reliable, accessible,
                        and
                        innovative care for countless patients and families, Providing expert guidance to patients.
                        Coordinating
                        with health care professionals and utilizing best -in class pharmacy workflow and dispensing systems
                        to
                        maximize accuracy and efficiency. It is an honor for our team to support the health of our patients
                        and
                        help them thrive.

                    </p>

                </div>
            </div>

            <div class="row align-items-md-stretch ">

                <div class="col-md-4">
                    <div class="h-100 p-5 text-white bg-primary rounded-3">

                        <p>
                            We understand the demands that people are under in modern society and that it may be difficult
                            to access
                            healthcare services. We don't believe that a person’s health should be compromised due to a
                            hectic
                            lifestyle, we believe that healthcare can work around you.
                        </p>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="h-100 p-5 text-white bg-primary rounded-3">

                        <p class="">
                            The digital team that is dedicated to the online sale of drugs over the years has managed to
                            create a 100%
                            secure web platform both in payments and in data storage, and customer service of the very first
                            level.
                        </p>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="h-100 p-5 text-white bg-primary rounded-3">

                        <p>
                            Monday to Friday 9 am - 9.30 pm. Saturday and Sunday 10am-10.30pm
                        </p>

                    </div>
                </div>

            </div>


            <hr class="mt-4 mb4">

            <div class="row">
                <!-- <div class="col-md-6 text-center text-md-start bg-light shadow-lg rounded-3 p-5">
                  <div class="form-box mt-5">
                    <h1 class="text-center">Contact Us</h1>
                    <form action="https://api.formbucket.com/f/c2K3QTQ" method="post">
                      <div class="form-group mt-2">
                        <label for="name">Name</label>
                        <input class="form-control" id="name" type="text" name="Name">
                      </div>
                      <div class="form-group mt-2">
                        <label class="form-check-label" for="email">Email</label>
                        <input class="form-control" id="email" type="email" name="Email">
                      </div>
                      <div class="form-group mt-2">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="Message"></textarea>
                      </div>
                      <input class="btn btn-primary mt-4" type="submit" value="Send Massage" />
                    </form>
                  </div>
                </div>
                <div class="col-md-6 bg-light rounded-3"></div> -->
            </div>

        </div>

    </main>

</div>





<?php
include('includes/lifecarefooter.php');
?>