<?php 

    require '../config/connect.php';

    $queryResult = mysqli_query($con, "SELECT * FROM pelanggan");
    $response = array();

    while($fetch = $queryResult->fetch_assoc()){
        $response[] = $fetch;
    }

    echo json_encode($response);

?>