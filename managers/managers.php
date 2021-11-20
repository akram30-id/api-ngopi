<?php 

    require '../config/connect.php';

    $queryResult = mysqli_query($con, "SELECT * FROM user WHERE level = 1");
    $response = array();

    while($fetch = $queryResult->fetch_assoc()){
        $response[] = $fetch;
    }

    echo json_encode($response);

?>