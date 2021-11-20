<?php

require '../config/connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $response = array();
    $id_pg = $_POST['id_pg'];
    $pemesan = $_POST['pemesan'];
    $barang = $_POST['barang'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $tgl = $_POST['tgl'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $status = $_POST['status'];
    $invoice = $_POST['invoice'];
    // $karakter = '0123456789';
    // $invoice = substr(str_shuffle($karakter), 0, 15);
    $total = $jumlah * $harga;
    // function generateRandomString($length = 15) {
    //     $characters = '0123456789';
    //     $charactersLength = strlen($characters);
    //     $randomString = '';
    //     for ($i = 0; $i < $length; $i++) {
    //         $randomString .= $characters[rand(0, $charactersLength - 1)];
    //     }
    //     return $randomString;
    // }
    // $invoice = generateRandomString();

    $insert = "INSERT INTO pesanan VALUE(NULL, '$id_pg', '$pemesan', '$barang', '$jumlah', '$harga', '$tgl', '$alamat', '$telp', '$invoice', '$status', '$total')";

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
