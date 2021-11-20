<?php


require '../config/connect.php';

$response = array();

$sql = mysqli_query($con, "SELECT COUNT(*) total_items FROM brg_keluar");
while ($a = mysqli_fetch_array($sql)) {
    $b['total_items'] = $a['total_items'];

    array_push($response, $b);
}

echo json_encode($response);
