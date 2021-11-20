<?php

require '../config/connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $response = array();
    $kategori = $_POST['kategori'];

    $insert = "INSERT INTO kategori_menu VALUE(NULL, '$kategori')";

    if (mysqli_query($con, $insert)) {
        $response['value'] = 1;
        $response['message'] = "Kategori baru ditambahkan";
        echo json_encode($response);
    } else {
        $response['value'] = 0;
        $response['message'] = "Gagal";
        echo json_encode($response);
    }
}
