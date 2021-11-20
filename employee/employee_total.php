<?php


require '../config/connect.php';

$response = array();

$sql = mysqli_query($con, "SELECT COUNT(*) total_employee FROM user WHERE level=2");
while ($a = mysqli_fetch_array($sql)) {
    $b['total_employee'] = $a['total_employee'];

    array_push($response, $b);
}

echo json_encode($response);
