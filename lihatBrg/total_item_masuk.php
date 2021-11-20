<?php 

    require '../config/connect.php';

    $response = array();

    $sql = mysqli_query($con, "SELECT COUNT(*) total FROM brg_masuk");
    while ($a = mysqli_fetch_array($sql)){
        $b['total'] = $a['total'];

        array_push($response, $b);
    }

    echo json_encode($response);
