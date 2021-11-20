<?php

require '../config/connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $response = array();
    $kategori = $_POST['kategori'];
    $nama = $_POST['nama'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $image = date('dmYHis') . str_replace(" ", "", basename($_FILES['image']['name']));
    $imagePath = "../menu/img/" . $image;
    move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);

    $insert = "INSERT INTO menu VALUE(NULL, (SELECT id FROM kategori_menu WHERE kategori = '$kategori'), '$nama', '$stok', '$harga', '$deskripsi', '$image')";

    if (mysqli_query($con, $insert)) {
        $response['value'] = 1;
        $response['message'] = "Berhasil ditambahkan";
        echo json_encode($response);
    } else {
        $response['value'] = 0;
        $response['message'] = "Gagal ditambahkan";
        echo json_encode($response);
    }
}
