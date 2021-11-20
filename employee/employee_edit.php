<?php

require "../config/connect.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $response = array();
    $id = $_POST['id'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $nama = $_POST['nama'];
    $image = date('dmYHis') . str_replace(" ", "", basename($_FILES['image']['name']));
    $imagePath = "pict/" . $image;
    move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);

    $edit = "UPDATE user SET email = '$email', phone = '$phone', address = '$address', username = '$username', password = '$password', nama = '$nama', level=2, image='$image' WHERE id='$id'";

    if (mysqli_query($con, $edit)) {
        $response['value'] = 1;
        $response['message'] = "Berhasil diedit";
        echo json_encode($response);
    } else {
        $response['value'] = 0;
        $response['message'] = "Gagal diedit";
        echo json_encode($response);
    }
}
