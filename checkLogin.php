<?php
session_start();
include('dbconfig.php');

if (isset($_POST['login_btn'])) {
    $username = $_POST['adminUsername'];
    $password = $_POST['adminPassword'];

    $query = "SELECT * FROM managementusers WHERE  mng_email='" . $username . "' AND  password='" . $password . "' ";
    $query_run = mysqli_query($connection, $query);

    $usertype = mysqli_fetch_array($query_run);


    if (!empty($username and $password)) {

        if ($usertype['role'] == 1) {
            $_SESSION['adminUsername'] = $username;
            $_SESSION['adminPassword'] = $password;
            $_SESSION['role'] = 1;
            header('location:dash.php');

        } elseif ($usertype['role'] == 2) {
            $_SESSION['adminUsername'] = $username;
            $_SESSION['adminPassword'] = $password;
            $_SESSION['role'] = 2;
            header('location:management_portal.php');

        } else {
            /*<script> alert("Invalid Username or Password") </script>'*/
            echo $_SESSION['massage']="Invalid Username or Password";
            header('location:login.php');
        }

    }

    else {
        echo '<script> alert("Empty Fields") </script>';
        echo "<script>location.href='login.php' </script>";
    }

}





