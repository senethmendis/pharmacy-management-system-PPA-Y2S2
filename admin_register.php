<?php
include_once ('dbconfig.php');

if(isset($_POST['registerbtn']))
{


    $adminFullname = $_POST['adminFullname'];
    $adminlastname = $_POST['adminLastname'];
    $contact = $_POST['adminContact'];
    $email = $_POST['adminEmail'];
    $username = $_POST['username'];
    $address = $_POST['adminAddress'];
    $password = $_POST['password'];
    $nic = $_POST['nic'];
    $confirm_password = $_POST['confirmpassword'];
    $role=1;

    if ($adminFullname == null && $contact == null && $email == null && $username == null && $address == null && $nic == null && $password == null && $confirm_password == null) {
        echo '<script> alert("Fill all the fields !!")</script>';
    } else {

        $query = "SELECT * FROM admintable WHERE  email='" . $email . "'";
        $query_run = mysqli_query($connection, $query);

        if (mysqli_num_rows($query_run) > 0) {

            echo '<script> alert("Username already exist !!") </script>';
            echo "<script>location.href='admin_register_form.php' </script>";
        }
        else{

            if($password === $confirm_password)
            {
                $query3 = "INSERT INTO invoice_user (email,password,first_name,last_name,address,mobile) VALUES ('$email','$confirm_password','$adminFullname','$adminlastname','$address','$contact')";
                $query_run3 = mysqli_query($connection, $query3);

                $query1 = "INSERT INTO admintable (username,email,password,fullname,nic,contact,address,role) VALUES ('$username','$email','$password','$adminFullname','$nic','$contact','$address','$role')";
                $query_run = mysqli_query($connection, $query1);

                $query2 = "INSERT INTO managementusers(mng_email,password,role) VALUES ('$email','$confirm_password','$role')";
                $query_run2 = mysqli_query($connection, $query2);



                if($query_run and $query_run2)
                {
                    echo "done";
                    $_SESSION['success'] =  "Admin is Added Successfully";
                    header('Location: admin_register_form.php');

                }
                else
                {
                    echo "not done";
                    $_SESSION['status'] =  "Admin is Not Added";
                    header('Location: admin_register_form.php');
                }
            }
            else
            {
                echo "pass no match";
                $_SESSION['status'] =  "Password and Confirm Password Does not Match";
                header('Location: admin_register_form.php');
            }

        }
    }






}


?> <?php
