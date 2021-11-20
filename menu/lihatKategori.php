<?php 

    require '../config/connect.php';

    $queryResult = mysqli_query($con, "SELECT * FROM kategori_menu");
    $response = array();

    while($fetch = $queryResult->fetch_assoc()){
        $response[] = $fetch;
    }

    echo json_encode($response);

?>