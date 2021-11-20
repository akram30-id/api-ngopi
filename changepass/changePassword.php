<?php 

    require "../config/connect.php";

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $response = array();
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $ganti = "UPDATE user SET password = '$password' WHERE id='$id'";
        
        if (mysqli_query($con, $ganti)) {
            $response['value'] = 1;
            $response['message'] = "update success";
            echo json_encode($respone);
        } else {
            $response['value'] = 0;
            $response['message'] = "update gagal";
            echo json_encode($respone);
        }
    }

?>