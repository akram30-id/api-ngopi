<?php 

    require "../config/connect.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $response = array();
        $id_branch = $_POST['id_branch'];
        // $foto = $_POST['foto'];

        $cek = "SELECT * FROM balance_sheet WHERE id_branch='$id_branch'";
        $result = mysqli_fetch_array(mysqli_query($con, $cek));

        if(isset($result)){
            $response['value'] = 1;
            $response['message'] = "Success";
            $response['id_branch'] = $result['id_branch'];
            echo json_encode($response);
        } else {
            $response['value'] = 0;
            $response['message'] = "Not Success";
            echo json_encode($response);
    } 
    
  }
