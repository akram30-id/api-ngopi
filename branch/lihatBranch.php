<?php 

    require '../config/connect.php';

    $queryResult = mysqli_query($con, "SELECT * FROM branch");
    $response = array();

    while($fetch = $queryResult->fetch_assoc()){
        $response[] = $fetch;
    }

    echo json_encode($response);

?>