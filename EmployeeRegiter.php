<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include_once('dbconfig.php');
if (isset($_POST['registerbtn'])) {
    $EmpFullname = $_POST['adminFullname'];
    $Emplastullname = $_POST['lastname'];
    $contact = $_POST['adminContact'];
    $email = $_POST['adminEmail'];
    $nic = $_POST['nic'];
    $address = $_POST['adminAddress'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirmpassword'];
    $role = 2;

    if ($EmpFullname == null && $contact == null && $email == null && $address == null && $nic == null && $password == null && $confirm_password == null) {
        echo '<script> alert("Fill all the fields !!")</script>';
    } else {

        $query = "SELECT * FROM employee WHERE  EmpEmail='" . $email . "'";
        $query_run = mysqli_query($connection, $query);

        if (mysqli_num_rows($query_run) > 0) {
            echo '<script> alert("Email already exist !!") </script>';
            echo "<script>location.href='register.php' </script>";
        } else {

            if ($password === $confirm_password) {
                $query = "INSERT INTO employee (EmpName,EmpContact,EmpPassword,Emp_nic,EmpAddress,EmpEmail,role) VALUES ('$EmpFullname','$contact','$password','$nic','$address','$email','$role')";
                $query2 = "INSERT INTO managementusers(mng_email,password,role) VALUES ('$email','$confirm_password','$role')";

                $query3 = "INSERT INTO invoice_user(email,password,first_name,last_name,address,mobile) VALUES ('$email','$confirm_password','$EmpFullname','$Emplastullname','$address','$contact')";
                $run2 = mysqli_query($connection, $query3);

                $run = mysqli_query($connection, $query2);
                $query_run = mysqli_query($connection, $query);

                if ($query_run and $run) {
                        echo "done";
                         $_SESSION['success'] = "Employee is Added Successfully";
                        header('Location: register.php');

                        $email = $_POST['adminEmail'];
                        $emp_password= $_POST['password'];
                        $subject ="Lifecare Pharmacy";

                        $message =" Welcome to Lifecare Pharmacy ";
                        $lifecareContact = $email;

                        require "vendor/autoload.php";

                        $mail = new PHPMailer(true);

                        $mail->SMTPDebug = SMTP::DEBUG_SERVER;

                        $mail->isSMTP();
                        $mail->SMTPAuth = true;

                        $mail->Host = "smtp.gmail.com";
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                        $mail->Port = 587;

                        $mail->Username = "ppademo2022@gmail.com";
                        $mail->Password = "kwnqrxwajdldiwag";

                        $mail->setFrom($email,  "LifeCare Pharmacy");
                        $mail->addAddress($email, "lifecareTest");

                        $mail->Subject = $subject;    $mail->Body =  $emp_password.' '.$message.' '.$lifecareContact;

                        $mail->send();

                } else {
                    echo "not done";
                    $_SESSION['status'] = "Employee is Not Added";
                    header('Location: register.php');
                }
            } else {
                echo "pass no match";
                $_SESSION['status'] = "Password and Confirm Password Does not Match";
                header('Location: register.php');
            }

        }
    }

}

?> 