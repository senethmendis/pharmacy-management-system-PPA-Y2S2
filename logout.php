<?php

session_start();
if (isset($_SESSION['adminUsername'])){
    unset($_SESSION['adminUsername']);
    session_destroy();
    /*header("location:login.php");*/
    echo "<script>location.href='login.php' </script>";
}