<?php

require '../config/connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $response = array();
    $id = $_POST['id'];
    $jalan = $_POST['jalan'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $kelurahan = $_POST['kelurahan'];
    $kecamatan = $_POST['kecamatan'];
    $kode_pos = $_POST['kode_pos'];
    $kota = $_POST['kota'];

    $update = "UPDATE branch SET jalan='$jalan', rt='$rt', rw='$rw', kelurahan='$kelurahan', kecamatan='$kecamatan', kode_pos='$kode_pos', kota='$kota' WHERE id='$id'";

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
