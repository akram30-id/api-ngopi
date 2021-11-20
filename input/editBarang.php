<?php

require '../config/connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $response = array();
    // $nama_brg = $_POST['nama_brg'];
    $jumlah = $_POST['jumlah'];
    $nama_brg = $_POST['nama_brg'];
    // $harga = $_POST['harga'];
    // $satuan = $_POST['satuan'];
    $id = $_POST['id'];

    // $update = "UPDATE brg_stok INNER JOIN brg_masuk ON brg_stok.id_brg = brg_masuk.id SET brg_masuk.jumlah = brg_masuk.jumlah + '$jumlah' WHERE brg_masuk.id = brg_stok.id_brg";
    // $update2 = "UPDATE brg_masuk SET jumlah='$jumlah' WHERE id='$id'";
    $update = "UPDATE brg_masuk SET jumlah='$jumlah', nama_brg='$nama_brg' WHERE id='$id';" . "UPDATE brg_stok SET jumlah = jumlah + '$jumlah'";

    if (mysqli_multi_query($con, $update)) {
        $response['value'] = 1;
        $response['message'] = "Data berhasil diubah";
        echo json_encode($response);
    } else {
        $response['value'] = 2;
        $response['message'] = "Data gagal diubah";
        echo json_encode($response);
    }
}
