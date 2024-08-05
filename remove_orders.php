<?php
session_start();
include ('dbconfig.php');
/*delete_comployee_btn*/

if (isset($_POST['delete_order_btn'])){
    $order_id = mysqli_real_escape_string($connection, $_POST['delete_order_btn']);

    $query =  "DELETE FROM orders WHERE order_id='$order_id'";

    /*notification qrs*/
    /*$noti_massage = "Employee " .$employee_id. " Deleted !!!!";*/

    /*$noti_name =$_POST['nofitication_name'];
    $query_notify = "INSERT INTO notification (notifyName,notification) VALUES ('$noti_name','$noti_massage')";*/

    $run = mysqli_query($connection, $query);
    /*$notify_run = mysqli_query($connection, $query_notify);*/

    if ($run){
        echo "Employee Deleted Successfully";
        header("Location:manage_orders.php");
        exit(0);
    }else{

        echo "Employee Not Deleted";
        header("Location:manage_orders.php");
        exit(0);
    }


}