<?php

require '../config/connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $response = array();
    $id = $_POST['id'];
    $status = $_POST['status'];

    $update = "UPDATE pesanan SET status='$status' WHERE id='$id'";

    if (mysqli_query($con, $update)) {
        $response['value'] = 1;
        $response['message'] = "Data berhasil diubah";
        echo json_encode($response);
    } else {
        $response['value'] = 2;
        $response['message'] = "Data gagal diubah";
        echo json_encode($response);
    }
}
