<?php

require "../config/connect.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $response = array();
    $password = md5($_POST['password']);
    $email = $_POST['email'];

    $edit = "UPDATE user SET password = '$password' WHERE email='$email'";

    if (mysqli_query($con, $edit)) {
        $response['value'] = 1;
        $response['message'] = "Berhasil ubah password";
        echo json_encode($response);
    } else {
        $response['value'] = 0;
        $response['message'] = "Gagal ubah password";
        echo json_encode($response);
    }
}
