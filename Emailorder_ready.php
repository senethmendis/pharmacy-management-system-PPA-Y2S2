<?php
session_start();
require_once "dbconfig.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['readytopic'])){

    $order_id =$_POST['orderid'];
    $order_email = $_POST['orderemail'];
    $order_date= $_POST['orderdate'];
    $order_name= $_POST['ordername'];
    $subject ="Lifecare Orders";

    $message ="Your Order is Ready To pickup At LifeCare Pharmacy ---------------------- \n ".' '."Your Order ID : ".' '.$order_id;
    $lifecareContact = '----------------------------->  Contact Us : 07X XXX XXXX ';

    require "vendor/autoload.php";



    $mail = new PHPMailer(true);

    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = "ppademo2022@gmail.com";
    $mail->Password = "kwnqrxwajdldiwag";

    $mail->setFrom($order_email,  "LifeCare Pharmacy");
    $mail->addAddress($order_email, "lifecareTest");

    $mail->Subject = $subject;    $mail->Body =  $order_name.' '.$message.' '.$lifecareContact;

    $mail->send();
    header("Location: manage_orders.php");

}