<?php

require '../config/connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $response = array();
    $nama_brg = $_POST['nama_brg'];
    $jumlah = $_POST['jumlah'];
    $satuan = $_POST['satuan'];
    $id = $_POST['id'];

    $update = "UPDATE brg_stok INNER JOIN brg_keluar ON brg_stok.id = brg_keluar.id_brg SET brg_stok.jumlah = brg_stok.jumlah - '$jumlah' WHERE brg_stok.id = brg_keluar.id_brg";
    $update2 = "UPDATE brg_keluar SET jumlah='$jumlah' WHERE id='$id'";

    if (mysqli_query($con, $update)) {
        if (mysqli_query($con, $update2)) {
            $response['value'] = 1;
            $response['message'] = "Data berhasil diubah";
            echo json_encode($response);
        } else {
            $response['value'] = 0;
            $response['message'] = "Data gagal diubah";
            echo json_encode($response);
        }
    } else {
        $response['value'] = 2;
        $response['message'] = "Data gagal diubah";
        echo json_encode($response);
    }
}
