<?php


require '../config/connect.php';

$response = array();

$sql = mysqli_query($con, "SELECT SUM(jumlah) AS total_jumlah FROM brg_stok");
while ($a = mysqli_fetch_array($sql)) {
    $b['total_jumlah'] = $a['total_jumlah'];

    array_push($response, $b);
}

echo json_encode($response);
