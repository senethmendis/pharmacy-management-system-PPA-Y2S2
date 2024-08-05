<?php
session_start();
if (isset($_SESSION["email"])){
    unset($_SESSION["email"]);
    session_destroy();
    echo "<script>location.href='index.php' </script>";
}