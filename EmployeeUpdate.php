<?php
include ('dbconfig.php');

if(isset($_POST['updatebtn']))
{
    $Emp_id = mysqli_real_escape_string($connection, $_POST['emp_uniq']);
    $name = mysqli_real_escape_string($connection, $_POST['fullname']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $contact = mysqli_real_escape_string($connection, $_POST['contact']);
    $address = mysqli_real_escape_string($connection, $_POST['address']);
    $nic = mysqli_real_escape_string($connection, $_POST['nic']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    $noti_name = "employee";
    $noti_massage= "Employee Data Updated !!";


    $query = "UPDATE employee SET EmpName='$name',EmpContact='$contact',EmpPassword='$password',Emp_nic='$nic',EmpAddress='$address',EmpEmail='$email' WHERE Empid='$Emp_id' ";

    $query_notify = "INSERT INTO notification (notifyName,notification) VALUES ('$noti_name','$noti_massage')";

    $run = mysqli_query($connection, $query);
    $notify_run = mysqli_query($connection, $query_notify);

    if($run and $notify_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        echo '<div class="alert alert-info" role="alert">  Student Updated Successfully ! </div>';
        header("Location: admin_register_form.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: EditEmployeeDetails.php");
        exit(0);
    }

}
