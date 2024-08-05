<?php
session_start();

if (isset($_POST['btn_login'])) {

    include ('dbconfig.php');
    $email = $_POST['email'] ;
    $password =$_POST['password'] ;

    $valid = false;

    $query = "SELECT * FROM customers WHERE  cemail='" . $email . "' AND  cpassword='" . $password . "'";
    $query_run = mysqli_query($connection, $query);


    if (!empty($email and $password)) {

        if (mysqli_num_rows($query_run) > 0) {
            $valid = true;
        } else {
            $valid = false;
        }

        if ($valid) {
            $_SESSION['email'] = $email;
            echo "success";
            header('location:index.php');


        } else {
            echo '<div class="alert alert-info" role="alert">  Enter Valid username or Password! </div>';
            exit(0);
        }

    } else{

        echo '<script> alert("Empty Fields") </script>';
        echo "<script>location.href='cust_login_form.php' </script>";

    }

}
