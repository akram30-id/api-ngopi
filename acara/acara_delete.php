<?php 

require '../config/connect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $response = array();
    $id = $_POST['id'];

    $delete = "DELETE FROM acara WHERE id='$id'";

    if(mysqli_query($con, $delete)){
        $response['value'] = 1;
        $response['message'] = "Acara berhasil dihapus";
        echo json_encode($response);
    } else {
        $response['value'] = 0;
        $response['message'] = "Gagal dihapus";
        echo json_encode($response);
    }
}

?>