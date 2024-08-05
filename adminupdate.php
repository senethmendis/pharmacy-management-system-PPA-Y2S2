<?php
include_once ('dbconfig.php');
if(isset($_POST['updatebtn']))
{
    $admin_id = mysqli_real_escape_string($connection, $_POST['emp_uniq']);
    $name = mysqli_real_escape_string($connection, $_POST['fullname']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $contact = mysqli_real_escape_string($connection, $_POST['contact']);
    $nic = mysqli_real_escape_string($connection, $_POST['nic']);
    $address = mysqli_real_escape_string($connection, $_POST['address']);
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $confirm_password = $_POST['confirmpassword'];

    if ($name == null && $contact == null && $email == null && $username == null && $address == null && $nic == null && $password == null && $confirm_password == null) {
        echo '<script> alert("Fill all the fields !!")</script>';
    }elseif ($password !=$confirm_password){
        echo '<script> alert("passwords does not match exist !!") </script>';
    } else {

        $query = "SELECT * FROM admintable WHERE  cemail='" . $username . "'";
        $query_run = mysqli_query($connection, $query);

        if (mysqli_num_rows($query_run) > 0) {

            echo '<script> alert("Username already exist !!") </script>';
            echo "<script>location.href='admin_register_form.php' </script>";
        } else{

            $query = "UPDATE admintable SET username='$username',email='$email',password='$password',fullname='$name',nic='$nic',contact='$contact',address='$address' WHERE id='$admin_id' ";
            $run = mysqli_query($connection, $query);

            if($run)
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
    }



}
