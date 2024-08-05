<?php
session_start();
include('dbconfig.php');

if (isset($_POST['login_btn'])) {
    $username = $_POST['adminUsername'];
    $password = $_POST['adminPassword'];

    $valid = false;

    $query = "SELECT * FROM admintable WHERE  username='" . $username . "' AND  password='" . $password . "' ";
    $query_run = mysqli_query($connection, $query);

    if (!empty($username and $password)) {

        if (mysqli_num_rows($query_run) > 0) {
            $valid = true;
        } else {
            $valid = false;
        }

        if ($valid) {
            $_SESSION['adminUsername'] = $username;
            header('location:dash.php');
        } else {
            echo '<script> alert("Invalid Username or Password") </script>';
            echo "<script>location.href='login.php' </script>";
            exit();
        }

    } else {
        echo '<script> alert("Empty Fields") </script>';
        echo "<script>location.href='login.php' </script>";
    }

}





