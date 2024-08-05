<?php
session_start();
include ('includes/lifecareheadder.php');
include ('includes/lifecarenavbar.php');
?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center hero-banner rounded-3">
    
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 fw-normal">Lifecare Pharmacy</h1>
        <p class="lead fw-normal">
            A better way to shop for health & beauty! Exactly what you need. Exactly where you are.
        </p>
        <a class="btn btn-outline-primary" href="#bottom">Explore More</a>
    </div>
    <div class="product-device product-device-1 bg-dark shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 bg-dark shadow-sm shadow-sm d-none d-md-block"></div>
    <img class="position-absolute overflow-hidden" src="Assets/img/herobanner.gif" alt="">
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3 ">
    <div class="text-bg-light  me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 py-3">
            <h2 class="display-5">Skincare</h2>
            <p class="text-primary lead">
                One step to flawless beauty. Make your skin glow and healthy with our store's range of skin care products.
            </p>
        </div>
        <div class="background-img-card-01 shadow-sm mx-auto"
             style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
            <img src="Assets/img/indexpage/skingcare.gif" alt="">

        </div>
    </div>
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
            <h2 class="display-5">Fitness Supplements</h2>
            <p class="lead text-primary">
                Maximize your workouts and provide your body with the necessary protein and amino acids it needs.
            </p>
        </div>
        <div class="background-img-card-02 shadow-sm mx-auto"
             style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
            <img src="Assets/img/indexpage/fitness.gif" alt="">
        </div>
    </div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
            <h2 class="display-5">Multivitamins</h2>
            <p class="lead text-primary">
                Nourish your hair, nails, and skin. Let the vitamins take care of what your diet misses.
            </p>
        </div>
        <div class="background-img-card-03 shadow-sm mx-auto"
             style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
            <img src="Assets/img/indexpage/vitamins.gif" alt="">
        </div>

    </div>
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 py-3">
            <h2 class="display-5">Pet Care</h2>
            <p class="lead text-primary">
                Here’s all that your pet needs food, supplements, vitamins, and toys. Best place to buy all requirements of good quality for pets.
            </p>
        </div>
        <div class="background-img-card-06 shadow-sm mx-auto"
             style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
            <img src="Assets/img/indexpage/petcare.gif" alt="">
        </div>

    </div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="text-bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
            <h2 class="display-5">All Kind of Medicines</h2>
            <p class="lead text-primary">And an even wittier subheading.</p>
        </div>
        <div class="background-img-card-04 bg-body shadow-sm mx-auto"
             style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
            <img src="Assets/img/indexpage/medicals.gif" alt="">
        </div>
    </div>
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden mb-5">
        <div class="my-3 py-3">
            <h2 class="display-5">Medical Tools</h2>
            <p class="lead text-primary">And an even wittier subheading.</p>
        </div>
        <div class="background-img-card-05 bg-body shadow-sm mx-auto"
             style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
            <img src="Assets/img/indexpage/medtools.gif" id="bottom" alt="">
        </div>
    </div>
</div>




<?php
include ('includes/scripts.php');
include ('includes/lifecarefooter.php')
?>
