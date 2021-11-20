<?php

require '../config/connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $response = array();
    $id_pg = $_POST['id_pg'];
    $nama_brg = $_POST['nama_brg'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $satuan = $_POST['satuan'];
    $nama_supplier = $_POST['nama_supplier'];
    $image = date('dmYHis') . str_replace(" ", "", basename($_FILES['image']['name']));
    $imagePath = "../image1/" . $image;
    move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);

    $insert = "INSERT INTO brg_masuk VALUE(NULL, '$id_pg', '$nama_brg', NOW(), '$jumlah', '$harga', '$satuan', '$image', '$nama_supplier');" . "INSERT INTO brg_stok VALUE(NULL, (SELECT id FROM brg_masuk WHERE nama_brg='$nama_brg'), '$nama_brg', NOW(), '$jumlah', '$harga', '$satuan', '$image', '$nama_supplier')";

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
