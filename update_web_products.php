<?php
include_once ('dbconfig.php');

if(isset($_POST['updatebtn']))
{
    $pro_id = mysqli_real_escape_string($connection, $_POST['pro_uniq']);
    $pro_name = mysqli_real_escape_string($connection, $_POST['pro_name']);
    $pro_img = mysqli_real_escape_string($connection, $_POST['pro_img']);
    $pro_price = mysqli_real_escape_string($connection, $_POST['pro_price']);
    $pro_status = mysqli_real_escape_string($connection, $_POST['pro_status']);
    $pro_quntity = mysqli_real_escape_string($connection, $_POST['pro_quantity']);

    $query = "UPDATE nonmedicalproducts SET proname='$pro_name',proimg='$pro_img',proprice='$pro_price',prostatus='$pro_status',proquantity='$pro_quntity' WHERE proid='$pro_id' ";

    $run = mysqli_query($connection, $query);

    if($run)
    {
        echo '<div class="alert alert-success" role="alert">  Product Details Updated ! </div>';

    }
    else
    {
        echo '<div class="alert alert-danger mt-2" role="alert">  Product Details not Updated ! </div>';

    }

}

?>

