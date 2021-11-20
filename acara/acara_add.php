<?php 

require '../config/connect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $response = array();
    $nama_acara = $_POST['nama_acara'];
    $deskripsi = $_POST['deskripsi'];
    $tempat = $_POST['tempat'];
    $time = $_POST['time'];

    $insert = "INSERT INTO acara VALUE(NULL, '$nama_acara', '$deskripsi', '$tempat', '$time')";

    if(mysqli_query($con, $insert)){
        $response['value'] = 1;
        $response['message'] = "Acara berhasil dibuat";
        echo json_encode($response);
    } else {
        $response['value'] = 0;
        $response['message'] = "Gagal dibuat";
        echo json_encode($response);
    }
}

?>