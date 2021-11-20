<?php 

    require '../config/connect.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $response = array();
        $id =  $_POST['id'];

        $delete = "DELETE FROM kategori_menu WHERE id = '$id'";
        if(mysqli_query($con, $delete)){
            $response['value'] = 1;
            $response['message'] = 'Berhasil Dihapus';
            echo json_encode($response);
        } else {
            $response['value'] = 0;
            $response['message'] = 'Gagal Dihapus';
            echo json_encode($response);
        }
    }

?>