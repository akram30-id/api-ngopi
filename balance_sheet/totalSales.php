<?php


require '../config/connect.php';

$response = array();

$sql = mysqli_query($con, "SELECT SUM(pemasukan) - SUM(pengeluaran) AS total_sales FROM balance_sheet");
while ($a = mysqli_fetch_array($sql)) {
    $b['total_sales'] = $a['total_sales'];

    array_push($response, $b);
}

echo json_encode($response);
