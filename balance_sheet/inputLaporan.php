<?php

require '../config/connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $response = array();
    $kecamatan = $_POST['kecamatan'];
    $pemasukan = $_POST['pemasukan'];
    $pengeluaran = $_POST['pengeluaran'];
    $modal = $_POST['modal'];
    $tgl = $_POST['tgl'];

    $insert = "INSERT INTO balance_sheet VALUE(NULL, (SELECT id FROM branch WHERE kecamatan = '$kecamatan'), '$tgl', '$pemasukan', '$pengeluaran', '$modal')";

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
