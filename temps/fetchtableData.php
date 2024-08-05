<!--tempo code -->

<?php
if (mysqli_num_rows($query_run) > 0) {
    while ($row = mysqli_fetch_assoc($query_run)) {

        ?>
        <tr>
            <td> <?php echo $row ['adminId']; ?> </td>
            <td> <?php echo $row ['username']; ?> </td>
            <td> <?php echo $row ['email']; ?> </td>
            <td> <?php echo $row ['password']; ?> </td>

            <td>
                <form action="" method="post">
                    <input type="hidden" name="edit_id" value="">
                    <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="delete_id" value="">
                    <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE
                    </button>
                </form>
            </td>

        </tr>

        <?php
    }
}
else{
    echo "no data found";
}
?>