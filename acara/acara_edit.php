<?php

require "../config/connect.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $response = array();
    $id = $_POST['id'];
    $nama_acara = $_POST['nama_acara'];
    $deskripsi = $_POST['deskripsi'];
    $tempat = $_POST['tempat'];
    $time = $_POST['time'];

    $edit = "UPDATE acara SET nama_acara = '$nama_acara', deskripsi = '$deskripsi', tempat = '$tempat', time = '$time' WHERE id='$id'";

    if (mysqli_query($con, $edit)) {
        $response['value'] = 1;
        $response['message'] = "Berhasil diedit";
        echo json_encode($response);
    } else {
        $response['value'] = 0;
        $response['message'] = "Gagal diedit";
        echo json_encode($response);
    }
}
