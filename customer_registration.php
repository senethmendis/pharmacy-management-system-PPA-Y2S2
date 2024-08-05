<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['btn_register'])) {

    include ('dbconfig.php');
    $name = $_POST['cust_name'];
    $email = $_POST['cust_email'];
    $nic = $_POST['cust_nic'];
    $age = $_POST['cust_age'];
    $contact = $_POST['cust_contact'];
    $address = $_POST['cust_address'];
    $password = $_POST['cust_password'];
    $repassword = $_POST['cust_repassword'];

    if ($name == null && $email == null && $nic == null && $age == null && $contact == null && $address == null && $password == null && $repassword == null) {
        echo '<script> alert("Fill all the fields !!")</script>';
    } else {

        $query = "SELECT * FROM customers WHERE  cemail='" . $email . "'";
        $query_run = mysqli_query($connection, $query);

        if (mysqli_num_rows($query_run) > 0) {

            echo '<script> alert("Email already exist !!") </script>';
            echo "<script>location.href='cust_register_form.php' </script>";
        } else {

            if ($password == $repassword) {
                $query = "INSERT INTO customers (cname,cemail,cnic,cage,ccontact,caddress,cpassword) VALUES ('$name','$email','$nic','$age','$contact','$address','$password')";
                $run = mysqli_query($connection, $query);

                if ($run) {
                    echo '<script> alert("Registration Success !!")</script>';

                    /*email register*/
                        $email = $_POST['cust_email'];
                        $name= $_POST['cust_name'];

                        $subject ="Lifecare Pharmacy Registration";

                        $message =" Welcome to Lifecare Pharmacy ";

                        $lifecareContact = '';

                        require "vendor/autoload.php";

                        $mail = new PHPMailer(true);

                        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;

                        $mail->isSMTP();
                        $mail->SMTPAuth = true;

                        //defuat google api data
                        $mail->Host = "smtp.gmail.com";
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                        $mail->Port = 587;

                        $mail->Username = "ppademo2022@gmail.com";
                        $mail->Password = "kwnqrxwajdldiwag";

                        $mail->setFrom($email,  "LifeCare Pharmacy");
                        $mail->addAddress($email, "lifecareTest");

                        $mail->Subject = $subject;
                        $mail->Body =  $name.' '.$message.' '.$lifecareContact;

                        $mail->send();
                        header('location:cust_login_form.php');

                } else {
                    echo '<script> alert("Registration Failed !!")</script>';
                    header('location:cust_register_form.php');
                    exit(0);
                }

            } else {
                echo '<script> alert("Passwords Dont match !!")</script>';
            }

        }

    }

}
