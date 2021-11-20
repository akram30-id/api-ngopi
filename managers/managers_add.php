<?php

require "../config/connect.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $response = array();
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $nama = $_POST['nama'];
    $image = date('dmYHis') . str_replace(" ", "", basename($_FILES['image']['name']));
    $imagePath = "pict/" . $image;
    move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);

    $insert = "INSERT INTO user VALUE(NULL, '$email', '$phone', '$address', '$username', '$password', '$nama', 2, '$image')";

    if (mysqli_query($con, $insert)) {
        $response['value'] = 1;
        $response['message'] = "Berhasil ditambahkan";
        echo json_encode($response);
    } else {
        $response['value'] = 0;
        $response['message'] = "Gagal ditambahkan";
        echo json_encode($response);
    }
}
