<?php

require '../config/connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $response = array();
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];

    $update = "UPDATE pelanggan SET nama='$nama', alamat='$alamat', telp='$telp' WHERE id='$id'";

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
