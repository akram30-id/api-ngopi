<?php 

require '../config/connect.php';

$query = mysqli_query($con, "SELECT * FROM supplier");
$response = array();

while($fetch = $query->fetch_assoc()){
    $response[] = $fetch;
}
echo json_encode($response);
