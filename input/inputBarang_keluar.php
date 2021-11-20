<?php

require '../config/connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $response = array();
    $nama_brg = $_POST['nama_brg'];
    $jumlah = $_POST['jumlah'];

    $insert = "INSERT INTO brg_keluar VALUE(NULL, (SELECT id FROM brg_stok WHERE nama_brg='$nama_brg'), '$nama_brg', NOW(), '$jumlah', (SELECT satuan FROM brg_stok WHERE nama_brg='$nama_brg'));" . "UPDATE brg_stok SET jumlah=jumlah - '$jumlah' WHERE nama_brg='$nama_brg'";

    if (mysqli_multi_query($con, $insert)) {
        $response['value'] = 1;
        $response['message'] = "Berhasil ditambahkan";
        echo json_encode($response);
    } else {
        $response['value'] = 0;
        $response['message'] = "Gagal ditambahkan";
        echo json_encode($response);
    }
}
