<?php
session_start();
if (!isset($_SESSION['adminUsername'])){
    header('location:login.php');
}
