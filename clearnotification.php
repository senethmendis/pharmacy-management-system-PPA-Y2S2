<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "lifecaredb");

/*delete_comployee_btn*/

if (isset($_POST['clear_notification'])) {

    $query = "DELETE FROM notification";

    $run = mysqli_query($connection, $query);

    if ($run) {
        echo '<script language="javascript">';
        echo 'alert("Notification Cleared !!!! ")';
        echo '</script>';
        header("Location:notificationpanel.php");
        exit(0);
    } else {

        echo "No Cleared";
        header("Location:notificationpanel.php");
        exit(0);
    }


}