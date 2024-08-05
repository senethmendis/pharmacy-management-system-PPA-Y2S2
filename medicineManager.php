<?php
include('includes/session_start.php');
include('Includes/emp_headder.php');
include('Includes/emp_nabvar.php');
?>

<div class="row  m-3 mb-3">

    <div class="row">
        <div class="col">
            <section class="mb-4">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6 main-bg-img">
                        <h2 class="text-lifecare mt-5 position-absolute">Lifecare <br> Management</h2>
                        <img src="Assets/img/addMedicine.gif" alt="">
                    </div>
                    <div class="col-lg-4 ">
                        <div class="card mt-4">
                            <div class="card-body">
                                <form id="form1" class="form-addmedicine " name="form1" method="post" action=""
                                      enctype="multipart/form-data">
                                    <table width="590" height="360" border="0">

                                        <?php
                                        include_once('dbconfig.php');

                                        if (isset($_POST['btnSubmit'])) {

                                            $medname = $_POST["txtName"];
                                            $medid = $_POST["txtMedicineID"];
                                            $medcat = $_POST["lstCategory"];
                                            $medmanufac = $_POST["lstManName"];
                                            $medprice = $_POST["txtPrice"];
                                            $medquantity = $_POST["txtQuantity"];
                                            $mededate = $_POST["ExpireDate"];
                                            $medstatus = $_POST["lstStatus"];


                                            if ($_FILES["medimg"]["error"] == 4) {
                                                echo '<div class="alert alert-warning" role="alert">Image Does not exist !</div>';
                                            } else {
                                                $fileName = $_FILES["medimg"]["name"];
                                                $fileSize = $_FILES["medimg"]["size"];
                                                $tmpName = $_FILES["medimg"]["tmp_name"];

                                                $validImageExtension = ['jpg', 'jpeg', 'png'];
                                                $imageExtension = explode('.', $fileName);
                                                $imageExtension = strtolower(end($imageExtension));

                                                if ($medname == null && $medid == null && $medcat == null && $medmanufac == null && $medprice == null && $medquantity == null && $mededate == null && $medstatus == null) {
                                                    echo '<div class="alert alert-warning" role="alert">Fill the Fields !</div>';
                                                } else {

                                                    if (!in_array($imageExtension, $validImageExtension)) {

                                                        echo '<div class="alert alert-warning" role="alert">Invalid Image Extension !</div>';
                                                    } else if ($fileSize > 2000000) {

                                                        echo '<div class="alert alert-warning" role="alert">Image Size Is Too Large !</div>';
                                                    } else {
                                                        $newImageName = uniqid();
                                                        $newImageName .= '.' . $imageExtension;

                                                        move_uploaded_file($tmpName, 'uploads/Medicine/' . $newImageName);

                                                        $query = "INSERT INTO medicine (medid,file,medname,medprice,medcategory,manufacture,quantity,expirydate,status) VALUES ('$medid', '$newImageName', '$medname', '$medprice', '$medcat', '$medmanufac', '$medquantity', '$mededate', '$medstatus')";
                                                        $query_run = mysqli_query($connection, $query);

                                                        $notifyName="Medicine";
                                                        $nameoftheitem=$medname.''." New Medicine Added to the System !";
                                                        $noti ="INSERT INTO notification(notifyName,notification) VALUES ('$notifyName','$nameoftheitem')";
                                                        $runnoti = mysqli_query($connection, $noti);

                                                        if ($query_run) {
                                                            echo '<div class="alert alert-success" role="alert">New Medicine Added !</div>';
                                                            exit(1);

                                                        } else {
                                                            echo '<div class="alert alert-danger" role="alert">Medicine Not Added Error !</div>';
                                                        }
                                                    }
                                                }
                                            }
                                        }

                                        ?>


                                        <tr>
                                            <td height="39" colspan="2">
                                                <h1>Add Medicine</h1>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td height="39">Medicine Image</td>
                                            <td><label for="myfile">Select file:</label>
                                                <input type="file" id="myfile" name="medimg" required>&nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="39">Generic Name</td>
                                            <td><label for="txtName"></label>
                                                <input type="text" name="txtName" id="txtName" placeholder="Enter Name"
                                                       required/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="185" height="39">Medicine ID</td>
                                            <td width="395"><label for="txtMedicineID"></label>
                                                <input type="text" name="txtMedicineID" id="txtMedicineID"
                                                       placeholder="Enter Medicine ID"
                                                       required/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="31">
                                                <p>Category Name</p>
                                            </td>
                                            <td><label for="txtCategoryName">
                                                    <select name="lstCategory" id="lstCategory" required>
                                                        <option selected="selected">........................</option>
                                                        <option value="Tablets">Tablets</option>
                                                        <option value="Syrup">Syrup</option>
                                                        <option value="Painkillers">Painkillers</option>
                                                        <option value="Skin">Skin Care</option>
                                                        <option value="Animal">Animal Health</option>

                                                    </select>
                                                </label></td>
                                        </tr>
                                        <tr>
                                            <td height="35">
                                                <p>Manufacturer Name</p>
                                            </td>
                                            <td><label for="txtManufacturerName">
                                                    <select name="lstManName" id="lstManName" required>
                                                        <option selected="selected">........................</option>
                                                        <option value="Hemas">Hemas</option>
                                                        <option value="Sun">Sun</option>
                                                        <option value="Navesta">Navesta</option>
                                                        <option value="Novartis">Novartis</option>
                                                        <option value="Slim">Slim</option>
                                                        <option value="Astron">Astron</option>
                                                        <option value="EMAR">EMAR</option>
                                                    </select>
                                                </label></td>

                                        </tr>
                                        <tr>
                                            <td height="39">Price</td>
                                            <td><label for="txtPrice"></label>
                                                <input type="text" name="txtPrice" id="txtPrice"
                                                       placeholder="Enter the Price"
                                                       required/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="39">Quantity</td>
                                            <td><label for="txtQuantity"></label>
                                                <input type="text" name="txtQuantity" id="txtQuantity"
                                                       placeholder="Enter the Quantity"
                                                       required/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="39">Expiry Date</td>
                                            <td><label for="ExpiryDate"></label>
                                                <input type="date" id="ExpireDate" name="ExpireDate"
                                                       placeholder="Add the EXpire Date" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="31">
                                                <p>Status</p>
                                            </td>
                                            <td><label for="txtStatus">
                                                    <select name="lstStatus" id="lstStatus" required>
                                                        <option selected="selected">........................</option>
                                                        <option value="Available">Available</option>
                                                        <option value="unavailable">Not Available</option>
                                                    </select>
                                                </label></td>
                                        </tr>


                                        <tr>
                                            <td height="34">&nbsp;</td>
                                            <td><input type="submit" class="btn btn-primary" name="btnSubmit"
                                                       id="btnSubmit"
                                                       value="Add Medicine"
                                                       onClick="validate()"/>
                                                <input type="reset" class="btn btn-primary" name="btnReset"
                                                       id="btnReset"
                                                       value="Reset"/>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td height="25" colspan="2">&nbsp;</td>
                                        </tr>
                                    </table>
                                </form>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col mt-4">
            <div class="card">
                <div class="card-body">


                    <form action="" method="get">
                        <div class="input-group mb-3">
                            <input type="text" name="search" value="<?php if (isset($_GET['search'])) {
                                echo $_GET['search'];
                            } ?>" class="form-control bg-light" placeholder="Search data">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>

                    <?php
                    include_once('dbconfig.php');

                    if ($connection) {

                        $query = "select * from medicine";
                        $query_run = mysqli_query($connection, $query);

                    } else {
                        echo "db connection issue";
                    }

                    ?>

                    <?php

                    include('dbconfig.php');
                    /*delete_comployee_btn*/

                    if (isset($_POST['delete_comployee_btn'])) {
                        $med_id = mysqli_real_escape_string($connection, $_POST['delete_comployee_btn']);

                        $query = "DELETE FROM medicine WHERE medid='$med_id'";
                        $run = mysqli_query($connection, $query);

                        if ($run) {
                            echo '<div class="alert alert-success" role="alert">
                                Medicine Deleted!
                            </div>';

                        } else {

                            echo '<div class="alert alert-danger" role="alert">
                                Medicine not Deletion Error!
                            </div>';
                        }

                    } ?>


                    <table class="table-responsive table" id="dataTable">

                        <thead>
                        <tr>
                            <th> Medicine ID</th>
                            <th> Medicine Name</th>

                            <th> Medicine Price</th>
                            <th> Manufacture</th>
                            <th> Expire Date</th>
                            <th> Quantity</th>
                            <th> Status</th>

                            <th> Availability</th>
                            <th> Remove</th>


                        </tr>
                        </thead>
                        <tbody>

                        <!--to fetch data to rows-->
                        <?php

                        if (isset($_GET['search'])) {
                            $filtervalues = $_GET['search'];
                            $query = "SELECT * FROM medicine WHERE CONCAT(medid,medname,medprice,medcategory,manufacture,expirydate,quantity,status) LIKE '%$filtervalues%' ";
                            $query_run2 = mysqli_query($connection, $query);

                            if (mysqli_num_rows($query_run2) > 0) {
                                foreach ($query_run2 as $item) {
                                    ?>
                                    <tr>
                                        <td> <?php echo $item ['medid']; ?> </td>
                                        <td> <?php echo $item ['medname']; ?> </td>
                                        <td> <?php echo $item ['medprice']; ?> </td>
                                        <td> <?php echo $item ['medcategory']; ?> </td>
                                        <td> <?php echo $item ['manufacture']; ?> </td>
                                        <td> <?php echo $item ['expirydate']; ?> </td>
                                        <td> <?php echo $item ['quantity']; ?> </td>
                                        <td> <?php echo $item ['status']; ?> </td>


                                        <td>
                                            <form action="" method="post">
                                                <button type="submit" name="delete_comployee_btn"
                                                        value="<?= $item ['medid']; ?>" class="btn btn-danger"> DELETE
                                                </button>

                                            </form>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="4"><?php echo '<div class="alert alert-warning" role="alert"> No data Found! </div>'; ?></td>
                                </tr>
                                <?php
                            }
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


