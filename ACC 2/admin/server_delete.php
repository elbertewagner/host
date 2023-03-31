<?php
include '../config.php';

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $q = "DELETE FROM `servers` WHERE `server_id` = '$id' ";
    $fire = mysqli_query($conn, $q);

    echo "<script>window.history.back(); window.location.reload();</script>";
    header('Location:../admin/dashboard.php?status=success&message=Server added succesfully');

}
