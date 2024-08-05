<?php
include ('includes/session_start.php');
include('Includes/emp_headder.php');
include('Includes/emp_nabvar.php');
?>


<div class="container-fluid">

    <div class="row p-4">

        <div class="col-lg-6">
            <div class="card p-3">
                <div class="card-body">
                    <div class="card-title mb-4">
                        <h2>Add Web Products</h2>
                    </div>

                    <?php
                    include_once('dbconfig.php');

                    if (isset($_POST['addproduct'])) {

                        $product_name = $_POST['pro_name'];
                        $product_price = $_POST['pro_price'];
                        $product_quantity = $_POST['pro_quantity'];
                        $product_status = $_POST['pro_status'];

                        if ($_FILES["pro_img"]["error"] == 4) {
                            echo '<div class="alert alert-warning" role="alert">Image Does not exist !</div>';
                        } else {
                            $fileName = $_FILES["pro_img"]["name"];
                            $fileSize = $_FILES["pro_img"]["size"];
                            $tmpName = $_FILES["pro_img"]["tmp_name"];

                            $validImageExtension = ['jpg', 'jpeg', 'png'];
                            $imageExtension = explode('.', $fileName);
                            $imageExtension = strtolower(end($imageExtension));

                            if ($product_name == null && $product_price == null && $product_quantity == null && $product_status == null) {
                                echo '<div class="alert alert-warning" role="alert">Fill the Fields !</div>';
                            } else {

                                if (!in_array($imageExtension, $validImageExtension)) {

                                    echo '<div class="alert alert-warning" role="alert">Invalid Image Extension !</div>';
                                } else if ($fileSize > 2000000) {

                                    echo '<div class="alert alert-warning" role="alert">Image Size Is Too Large !</div>';
                                } else {
                                    $newImageName = uniqid();
                                    $newImageName .= '.' . $imageExtension;

                                    move_uploaded_file($tmpName, 'uploads/WebProducts/' . $newImageName);
                                    $query = "INSERT INTO nonmedicalproducts (proname,proimg,proprice,prostatus,proquantity)  VALUES('$product_name','$newImageName','$product_price','$product_status','$product_quantity')";
                                    $query_run = mysqli_query($connection, $query);

                                    $notifyName="Web Product";
                                    $nameoftheitem=$product_name.''." Added To WebStore";
                                    $noti ="INSERT INTO notification(notifyName,notification) VALUES ('$notifyName','$nameoftheitem')";
                                    $runnoti = mysqli_query($connection, $noti);

                                    /*echo " <script> alert('Successfully Added');document.location.href = 'data.php';</script>";*/

                                    if ($query_run) {
                                        echo '<div class="alert alert-success" role="alert">Sub Product Added !</div>';
                                        exit();
                                    } else {
                                        echo '<div class="alert alert-success" role="alert">No added !</div>';
                                    }
                                }
                            }
                        }
                    }

                    ?>

                    <form method="post" action="" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Product Image</label>
                            <input type="file" class="form-control" name="pro_img" id="exampleInputEmail1"
                                   aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Product Name </label>
                            <input type="text" placeholder="Ex: Skin toner" name="pro_name" class="form-control"
                                   id="exampleInputPassword1">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Product Price </label>
                            <input type="number" placeholder="In Rs. xxxx " name="pro_price" class="form-control"
                                   id="exampleInputPassword1">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Product Quantity </label>
                            <input type="number" placeholder="Ex: 50 " name="pro_quantity" class="form-control"
                                   id="exampleInputPassword1">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Product Status </label>
                            <input type="text" placeholder="Ex:Coming Soon " name="pro_status" class="form-control"
                                   id="exampleInputPassword1">
                        </div>


                        <button type="submit" class="btn btn-primary" name="addproduct">Add To Showcase</button>
                        <button type="reset" class="btn btn-danger">Clear</button>
                    </form>


                </div>
            </div>
        </div>

        <style>
            .hero-banner {
                width: 100%;
                height: 100%;
                background-size: cover;
                background-image: url(Assets/img/test.gif);
            }
        </style>
        <div class="col-lg-6">
            <div class="container-fluid hero-banner rounded-3"></div>
        </div>

    </div>

    <div class="row mb-5 p-4">

        <div class="card">


            <div class="card-body">

                <div class="table-responsive">

                    <?php
                    include('dbconfig.php');
                    /*delete_comployee_btn*/

                    if (isset($_POST['delete_comployee_btn'])) {
                        $pro_id = mysqli_real_escape_string($connection, $_POST['delete_comployee_btn']);

                        $query = "DELETE FROM nonmedicalproducts WHERE proid='$pro_id'";
                        $run = mysqli_query($connection, $query);

                        $notifyName="Web Product";
                        $nameoftheitem=$product_name.''." Deleted From WebStore";
                        $noti ="INSERT INTO notification(notifyName,notification) VALUES ('$notifyName','$nameoftheitem')";
                        $runnoti = mysqli_query($connection, $noti);

                        if ($run) {
                            echo '<div class="alert alert-success" role="alert">
                                Product Deleted!
                            </div>';
                        } else {

                            echo '<div class="alert alert-danger" role="alert">
                                Product Deletion Error!
                            </div>';
                        }

                    } ?>


                    <?php
                    include_once('dbconfig.php');
                    if ($connection) {
                        $query = "select * from nonmedicalproducts";
                        $query_run = mysqli_query($connection, $query);

                    } else {
                        echo "db connection issue";
                    }

                    ?>


                    <table class="table" id="dataTable">
                        <thead>
                        <tr>
                            <th> Product ID</th>
                            <th> Product Name</th>
                            <th> Product Image</th>
                            <th> Product Price</th>
                            <th> Product Status</th>
                            <th> Product Quantity</th>

                        </tr>
                        </thead>
                        <tbody>

                        <!--to fetch data to rows-->
                        <?php
                        if (mysqli_num_rows($query_run) > 0) {
                            while ($row = mysqli_fetch_assoc($query_run)) {
                                ?>
                                <tr>
                                    <td> <?php echo $row ['proid']; ?> </td>
                                    <td> <?php echo $row ['proname']; ?> </td>
                                    <td><img class="img-fluid" width="150px" src="uploads/WebProducts/<?php echo $row ['proimg']; ?>" alt="">  </td>
                                    <td> <?php echo $row ['proprice']; ?> </td>
                                    <td> <?php echo $row ['prostatus']; ?> </td>
                                    <td> <?php echo $row ['proquantity']; ?> </td>


                                    <td>
                                        <a href="Edit_web_products.php?id=<?= $row ['proid']; ?>" id="editModalLabel"
                                           class="btn btn-primary">Edit</a>
                                    </td>

                                    <td>



                                        <form action="" method="post">
                                            <button type="submit" name="delete_comployee_btn"
                                                    value="<?= $row ['proid']; ?>" class="btn btn-danger"> DELETE
                                            </button>
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

</div>

<?php
include('Includes/emp_footer.php');
?>
