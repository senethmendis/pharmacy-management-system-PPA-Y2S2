<?php
$connection = mysqli_connect("localhost", "root", "", "lifecaredb");

if ($connection) {
    $query = "select * from supplier";
    $query_run = mysqli_query($connection, $query);

} else {
    echo "db connection issue";
}


?>

<table class="table table-hover table-bordered" id="dataTable">
    <thead>
    <tr>
        <th> ID </th>
        <th> Name</th>
    </tr>
    </thead>

    <tbody>
    <?php


    if (mysqli_num_rows($query_run) > 0) {

        while ($data = mysqli_fetch_assoc($query_run)) {

            ?>
            <tr>
                <td> <?php echo $data ['Sup_id']; ?> </td>
                <td> <?php echo $data ['CompanyName']; ?> </td>

            </tr>


            <?php
        }
    }
    else{
        echo "no data found";
    }
    ?>

    </tbody>
</table>




<!------------------------------------------------------------------------>

$query_notify = "INSERT INTO notification (notifyName,notification) VALUES ('$noti_name','$noti_massage')";














