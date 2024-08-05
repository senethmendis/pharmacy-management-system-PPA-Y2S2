<?php
session_start();

if (isset($_POST['masterkey_btn'])) {

    $masterkey="abcd";
    $key = $_POST['masterkey'];

    if (!empty( $key)) {
        if ($key===$masterkey){
            header('location:admin_register_form.php');
        }else{
            echo '<script> alert("Invalid Masterkey !!!") </script>';
            echo "<script>location.href='dash.php' </script>";
        }

    } else{
        echo '<script> alert("Empty Fields") </script>';
        echo "<script>location.href='dash.php' </script>";
    }

}
