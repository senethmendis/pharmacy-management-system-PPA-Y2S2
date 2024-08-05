<?php
session_start();
if (!isset($_SESSION['email'])){
    header('location:cust_login_form.php');
}
