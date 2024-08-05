<?php
session_start();
include ('dbconfig.php');
/*delete_comployee_btn*/

if (isset($_POST['delete_comployee_btn'])){
    $employee_id = mysqli_real_escape_string($connection, $_POST['delete_comployee_btn']);
    $employee_email = mysqli_real_escape_string($connection, $_POST['get_email']);

    $query =  "DELETE FROM employee WHERE Empid='$employee_id'";
    $query2 =  "DELETE FROM managementusers WHERE mng_email='$employee_email'";

    /*notification qrs*/
    $noti_massage = "Employee " .$employee_id. " Deleted !!!!";

    $noti_name =$_POST['nofitication_name'];
    $query_notify = "INSERT INTO notification (notifyName,notification) VALUES ('$noti_name','$noti_massage')";


    $run = mysqli_query($connection, $query);
    $run2 = mysqli_query($connection, $query2);

    $notify_run = mysqli_query($connection, $query_notify);

    if ($run and $notify_run){
        echo "Employee Deleted Successfully";
        header("Location:register.php");
        exit(0);
    }else{

        echo "Employee Not Deleted";
        header("Location:register.php");
        exit(0);
    }


}
