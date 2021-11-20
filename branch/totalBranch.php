<?php


require '../config/connect.php';

$response = array();

$sql = mysqli_query($con, "SELECT COUNT(*) total_branch FROM branch");
while ($a = mysqli_fetch_array($sql)) {
    $b['total_branch'] = $a['total_branch'];

    array_push($response, $b);
}

echo json_encode($response);
