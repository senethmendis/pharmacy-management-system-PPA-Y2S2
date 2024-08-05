<?php
session_start();
include ('dbconfig.php');
/*delete_comployee_btn*/

if (isset($_POST['delete_admin_btn'])){

    $admin_id = mysqli_real_escape_string($connection, $_POST['delete_admin_btn']);
    $temp_email = mysqli_real_escape_string($connection, $_POST['temp_admin_email']);


    $query =  "DELETE FROM admintable WHERE id='$admin_id'";
    $query2 =  "DELETE FROM managementusers WHERE mng_email='$temp_email'";

    $run = mysqli_query($connection, $query);
    $run2 = mysqli_query($connection, $query2);


    if ($run){
        echo "admin Deleted Successfully";
        header("Location:admin_register_form.php");
        exit(0);
    }else{

        echo "admin Not Deleted";
        header("Location:admin_register_form.php");
        exit(0);
    }


}

