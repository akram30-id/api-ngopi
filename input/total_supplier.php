<?php


require '../config/connect.php';

$response = array();

$sql = mysqli_query($con, "SELECT COUNT(*) total_supplier FROM supplier");
while ($a = mysqli_fetch_array($sql)) {
    $b['total_supplier'] = $a['total_supplier'];

    array_push($response, $b);
}

echo json_encode($response);
