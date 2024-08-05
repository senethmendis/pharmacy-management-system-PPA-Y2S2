<?php
session_start();
include ('dbconfig.php');
/*delete_comployee_btn*/

if (isset($_POST['delete_comployee_btn'])){
    $pro_id = mysqli_real_escape_string($connection, $_POST['delete_comployee_btn']);

    $query =  "DELETE FROM nonmedicalproducts WHERE Empid='$pro_id'";

    /*notification qrs*/
    $noti_massage = "Employee " .$employee_id. " Deleted !!!!";

    $noti_name =$_POST['nofitication_name'];
    $query_notify = "INSERT INTO notification (notifyName,notification) VALUES ('$noti_name','$noti_massage')";


    $run = mysqli_query($connection, $query);
    $notify_run = mysqli_query($connection, $query_notify);

    if ($run and $notify_run){
        echo "Employee Deleted Successfully";
        header("Location:web_store_manager.php");
        exit(0);
    }else{

        echo "Employee Not Deleted";
        header("Location:web_store_manager.php");
        exit(0);
    }

}

