<?php
session_start();
require_once "dbconfig.php";

if (isset($_POST['ready-to-pickup'])){

    $order_email = $_POST['order_email'];
    $order_date= $_POST['order_date'];
    $order_date= $_POST['order_name'];

}

