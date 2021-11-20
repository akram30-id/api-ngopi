<?php 

    require '../config/connect.php';

    $queryResult = mysqli_query($con, "SELECT max(tgl) FROM balance_sheet");
    $response = array();

    while($fetch = $queryResult->fetch_assoc()){
        $response[] = $fetch;
    }

    echo json_encode($response);

?>